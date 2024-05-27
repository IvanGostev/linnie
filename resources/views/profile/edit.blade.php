@extends('layouts.main')

@section('content')
    <style>


        .gbtn {
            color: #efefff;
            position: relative;
            border-radius: 99px;
            border: 1px solid #6c757d;
            text-decoration: none;
            text-transform: uppercase;
            padding: 0.5rem 1.5rem;
            font-weight: 700;
            outline: none;
            background: #6c757d;
            transition: all 0.22s;
            cursor: pointer;
            margin-right: 1rem;
            margin-buttom: 5px;
            display: inline-block;
        }

        .gbtn.gprimary {
            background: #42b983;
            color: #fff;
            display: none !important;
        }

        /*.gbtn:active {*/
        /*    box-shadow: insert 1px 1px 1px rgba(0, 0, 0, 0.3);*/
        /*}*/
        .gbtn:hover {
            cursor: pointer;
            opacity: 0.8;
        }

        /*input[type=file] {*/
        /*    display: none;*/
        /*}*/

        .gpreview {
            display: flex;
            flex-wrap: wrap;
            padding: 0.5rem;
        }

        .gpreview-img {
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .gpreview-img:hover .gpreview-remove {
            opacity: 1;
        }

        .gpreview-img:hover .gpreview-info {
            bottom: 0;
        }

        .gpreview-img img {
            width: 180px;
            height: 100%;
            display: block;

        }

        .gpreview-remove {
            opacity: 0;
            width: 20px;
            height: 20px;
            position: absolute;
            right: 0;
            top: 0;
            font-weight: bold;
            background: rgba(255, 255, 255, .5);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: opacity 0.22s;
        }

        .gpreview-info {
            position: absolute;
            left: 0;
            bottom: -30px;
            right: 0;
            height: 24px;
            font-size: 0.8rem;
            background: rgba(255, 255, 255, .5);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 5px;
            transition: bottom 0.22s;
        }

        .gpreview-img.removing {
            transform: scale(0);
            transition: transform 0.3s;
        }

        .gpreview-info-progress {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            background-color: #42b983;
            transition: width 0.22s;
            width: 30%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

    </style>
    <section class="content-header">
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">


                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center" >
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{ asset('storage/' . $user->img) }}" style="max-width: 107px!important; max-height: 107px!important"
                                     alt="User profile picture" width="110" height="110">
                            </div>

                            <h3 class="profile-username text-center">{{$user->name}}</h3>
                            @if(auth()->user()->role > 1)
                                    <a href="{{route('userdocument.index')}}" class="btn btn-dark btn-block">Мастера</a>
                                <br>
                            @endif
                            <form action="{{route('logout')}}" method="post" >
                                @csrf
                                <button type="submit" class="btn btn-primary btn-block"><b>Выйти</b></button>
                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
                <div class="col-md-9" style="height: auto">
                    <div class="card" >

                        <div class="card-body body-check" >
                            <div class="tab-content">


                                <div class="active tab-pane" id="settings">
                                    <form class="form-horizontal" method="post" action="{{route('profile.update', $user->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Поменять фотографию</label>
                                            <div class="col-sm-10">
                                                <input style="display: none" name="img" type="file" id="images">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Имя</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="name" value="{{auth()->user()->name}}" id="inputName"
                                                       placeholder="Имя">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Изменить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                @if(auth()->user()->role == 1)
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Заявки в работе</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Причина</th>
                                    <th>Дата</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->workProblems() as $problem)

                                    <tr>
                                        <td>{{$problem->reason()->title}}</td>
                                        <td>{{$problem->created_at }}</td>
                                        <td class="text-right align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('problem.edit',  $problem->id)}}" class="btn btn-success">Редактировать</a>
                                            </div>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('report.create',  $problem->id)}}" class="btn btn-info">Написать отчет</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Заявки завершеные</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Причина</th>
                                    <th>Дата</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->completedProblems() as $problem)

                                    <tr>
                                        <td>{{$problem->reason()->title}}</td>
                                        <td>{{$problem->created_at }}</td>
                                        <td class="text-right align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('report.pdf',  $problem->id)}}" class="btn btn-info">PDF</a>
                                            </div>
                                        </td>
                                        <td class="text-right align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('report.show',  $problem->id)}}" class="btn btn-info"><i
                                                        class="fas fa-eye"></i>Посмотреть</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                @endif()
                @if(auth()->user()->role == 0)
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Отчеты по мои заявкам</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Причина</th>
                                        <th>Дата</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user->myProblems() as $problem)

                                        <tr>
                                            <td>{{$problem->reason()->title}}</td>
                                            <td>{{$problem->created_at }}</td>
                                            <td class="text-right align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{route('report.pdf',  $problem->id)}}" class="btn btn-info">PDF</a>
                                                </div>
                                            </td>
                                            <td class="text-right align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{route('report.show',  $problem->id)}}" class="btn btn-info"><i
                                                            class="fas fa-eye"></i>Посмотреть</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Мои документы</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Документ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user->documents() as $document)
                                        <tr>
                                            <td>   <a download="{{$document->title}}" href="{{ asset('storage/' . $document->src) }}">{{$document->title}}</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                @endif()
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    @if(auth()->user()->role > 1)
        <style>
            .body-check {
             height: 287px!important;
            }
        </style>
    @endif
    <script>
        function formatBytes(bytes, decimals = 2) {
            if (!+bytes) return '0 Bytes'

            const k = 1024
            const dm = decimals < 0 ? 0 : decimals
            const sizes = ['Bytes', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB']

            const i = Math.floor(Math.log(bytes) / Math.log(k))

            return `${parseFloat((bytes / Math.pow(k, i)).toFixed(dm))} ${sizes[i]}`
        } // переводим в байты код из stackoverflow

        const element = (tag, classes = [], text) => {
            const node = document.createElement(tag)
            if (classes.lenght != 0) {
                node.classList.add(...classes)
            }
            if (text) {
                node.textContent = text;
            }
            return node;
        } // вспомагательная функция для создания элементов dom
        function noop() {
        }

        function upload(selector, options = {}) {
            let files = []
            const onUpload = options.onUpload ?? noop
            const input = document.querySelector(selector)
            // const preview = document.createElement('div') // создаем div
            // preview.classList.add('preview') // добовляем класс
            // const open = document.createElement('button')
            // open.classList.add('btn') // добавляем класс
            // open.textContent = 'Открыть' // текст кнопки
            // после создания функции element переписали создание элементов
            const preview = element('div', ['gpreview'])
            const open = element('a', ['gbtn'], 'Выбрать фотографию')
            const upload = element('a', ['gbtn', 'gprimary', 'none'], 'Загрузить')
            upload.style.display = 'none'; // скрываем копку

            // if (options.multi) {
            //     input.setAttribute('multiple', false) // разрешили загрузку нескольких фалов
            // }
            if (options.accept && Array.isArray(options.accept)) {
                input.setAttribute('accept', options.accept.join(',')) // указали какие типы фалов нужны
            }
            input.insertAdjacentElement('afterend', preview)
            input.insertAdjacentElement('afterend', upload) // размещаем объект после input
            input.insertAdjacentElement('afterend', open) // размещаем объект после input


            const triggerInput = () => input.click() // нажимаем на input

            const changeHandler = event => {

                if (!event.target.files.length) {
                    return // проверка на наличие файлов
                }

                files = Array.from(event.target.files) // коллекцию переводим в массив
                preview.innerHTML = ''
                upload.style.display = 'inline' // показываем кнопку

                files.forEach(file => {
                    if (!file.type.match('image')) {// проверяем что файл типа картинка
                        return
                    }

                    const reader = new FileReader(); // объект для чтения файлов в браузере

                    reader.onload = ev => {
                        // console.log(ev.target.result) // как только мы его считаем выполняем console.log()
                        // input.insertAdjacentHTML('afterend', `<img src="${ev.target.result}">`)
                        const src = ev.target.result
                        preview.insertAdjacentHTML('afterbegin', `
                    <div class="gpreview-img">
                        <img src="${src}" alt="${file.name}">
                        <div class="gpreview-info">
                            <span>${file.name} </span>
                            ${formatBytes(file.size)}
                        </div>
                    </div>
                `) // afterbegin - располагаем внутри
                    }

                    reader.readAsDataURL(file) // асинхронная (не знаем когда выполниться)
                })
            }


            const clearPreview = el => {
                el.style.bottom = 0;
                el.innerHTML = '<div class="gpreview-info-progress"></div>'
            }
            const uploadHandler = () => {
                preview.querySelectorAll('.gpreview-remove').forEach(e => e.remove()) // удаляем кнопку "удалить изображение"
                const previewInfo = preview.querySelectorAll('.gpreview-info')
                previewInfo.forEach(clearPreview)
                onUpload(files, previewInfo)
            }
            // что-то остлеживаем и вызываем функцию выше
            open.addEventListener('click', triggerInput) // отслеживаем нажатие на кнопку
            input.addEventListener('change', changeHandler) // отслеживает загрузку файлов

            upload.addEventListener('click', uploadHandler)

        }


        upload("#images", {
            multi: true, // если true то можем загружать несколько файлов
            accept: ['.png', '.jpg', '.gif']
        })
    </script>
@endsection
