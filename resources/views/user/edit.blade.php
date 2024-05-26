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
            width: 100px;
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

                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <h5>{{$user->name}}</h5>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Файлы</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($documents as $document)

                                    <tr>
                                        <td>     <a download="{{$document->title}}" class="pr-3" href="{{ asset('storage/' . $document->src) }}">{{$document->title}}</a></td>
                                        <td class="text-right align-middle">
                                            <form action="{{route('userdocument.delete', $document->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button  type="submit" class="btn btn-danger">Открепить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="tab-content">

                                <div class="active tab-pane" id="settings">
                                    <form class="form-horizontal" method="post" action="{{route('userdocument.update', $user->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Добавить файлы</label>
                                            <div class="col-sm-10">
                                                <input style="display: none" name="files[]" type="file" id="files"
                                                       multiple>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">Прикрепить</button>
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
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
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
            const open = element('a', ['gbtn'], 'Выбрать файлы')
            const upload = element('a', ['gbtn', 'gprimary', 'none'], 'Загрузить')
            upload.style.display = 'none'; // скрываем копку

            if (options.multi) {
                input.setAttribute('multiple', true) // разрешили загрузку нескольких фалов
            }
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

                    const reader = new FileReader(); // объект для чтения файлов в браузере

                    reader.onload = ev => {
                        // console.log(ev.target.result) // как только мы его считаем выполняем console.log()
                        // input.insertAdjacentHTML('afterend', `<img src="${ev.target.result}">`)
                        const src = ev.target.result
                        let exel = `
                    <div class="gpreview-img">
             <img src="/fileimg/excel.svg" alt=""  >
                        <div class="gpreview-info">
                            <span>${file.name} </span>
                        </div>
                    </div>
                `;
                        let word = `
                    <div class="gpreview-img">
             <img src="/fileimg/word.svg" alt=""  >
                        <div class="gpreview-info">
                            <span>${file.name} </span>
                        </div>
                    </div>
                `;
                        let powerpoint = `
                    <div class="gpreview-img">
             <img src="/fileimg/powerpoint.svg" alt=""  >
                        <div class="gpreview-info">
                            <span>${file.name} </span>
                        </div>
                    </div>
                `;
                        let pdf = `
                    <div class="gpreview-img">
             <img src="/fileimg/pdf.svg" alt=""  >
                        <div class="gpreview-info">
                            <span>${file.name} </span>
                        </div>
                    </div>
                `;
                        let resType = `
                    <div class="gpreview-img">
             <img src="/fileimg/text.svg" alt=""  >
                        <div class="gpreview-info">
                            <span>${file.name} </span>
                        </div>
                    </div>
                `;
                        switch (file.name.split('.')[1]) {
                            case 'xls':
                                resType = exel;
                                break;
                            case 'xlsx':
                                resType = exel;
                                break;
                            case 'doc':
                                resType = word;
                                break;
                            case 'docx':
                                resType = word;
                                break;
                            case 'ppt':
                                resType = powerpoint;
                                break;
                            case 'pptx':
                                resType = powerpoint;
                                break;
                            case 'pdf':
                                resType = pdf;
                                break;


                        }
                        preview.insertAdjacentHTML('afterbegin', resType) // afterbegin - располагаем внутри
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


        upload("#files", {
            multi: true, // если true то можем загружать несколько файлов
            // accept: ['.txt', '.zip', '.gif']
        })
    </script>
@endsection
