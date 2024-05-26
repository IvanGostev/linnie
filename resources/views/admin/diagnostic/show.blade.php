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

                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Диагностика по {{$diagnostic->user()->name}} период от {{$diagnostic->period()->created_at}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">


                                <div class="active tab-pane" id="settings">
                                        <div>
                                            <h6>СКПБ:</h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-11 col-form-label">Проверка состояния и целостности датчиков, индикаторов и кабельных соединений. Наличие резервного кабеля для сенсора нагрузки и инструкции пользователя СКПБ</label>
                                            <div class="col-sm-1 form-bord-ic">
                                                <span>{{$diagnostic->skpb_first == 1 ? 'Да' : 'Нет'}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-11 col-form-label">Проверка состояния GPRS, блока памяти, блокировок, газоанализатора и звуковой сигнализации</label>
                                            <div class="col-sm-1 form-bord-ic">
                                                <span>{{$diagnostic->skpb_second == 1 ? 'Да' : 'Нет'}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-11 col-form-label">Настройка прибора СКПБ (при необходимости)</label>
                                            <div class="col-sm-1 form-bord-ic">
                                                <span>{{$diagnostic->skpb_third == 1 ? 'Да' : 'Нет'}}</span>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div>
                                            <h6>СТВ:</h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-11 col-form-label">Внешний осмотр технического состояния коммутационного шкафа, видеорегистратора, маршрутизатора, монитора, источников питания, видеокамеры, целостности кабелей и разъемов</label>
                                            <div class="col-sm-1 form-bord-ic">
                                                <span>{{$diagnostic->stv_first == 1 ? 'Да' : 'Нет'}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-11 col-form-label">Проверка видеоархива, даты и времени на видеорегистраторе</label>
                                            <div class="col-sm-1 form-bord-ic">
                                                <span>{{$diagnostic->stv_second == 1 ? 'Да' : 'Нет'}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-11 col-form-label">Настройка системы технологического видеонаблюдения Заказчика в соответствии с его требованиями (при необходимости)</label>
                                            <div class="col-sm-1 form-bord-ic">
                                                <span>{{$diagnostic->stv_third == 1 ? 'Да' : 'Нет'}}</span>
                                            </div>
                                        </div>
                                        <br>
                                        <br>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">В результате проведения работ по техническому обслуживанию СИСТЕМ выявлены следующие неисправности:</label>
{{--                                            <textarea name="malfunctions" class="form-control" rows="5"></textarea>--}}
                                            <p>{{$diagnostic->malfunctions}}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Особое мнение:</label>
{{--                                            <textarea name="opinion" class="form-control" rows="5"></textarea>--}}
                                            <p>{{$diagnostic->opinion}}</p>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Представитель ООО "ВэллТех"</label>
                                            <div class="col-sm-10">
{{--                                                <input class="form-control"  name="representative"  id="inputName"--}}
{{--                                                       placeholder="Должность, ФИО">--}}
                                                <p>{{$diagnostic->representative}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Представитель ООО "ЛИНИИ"</label>
                                            <div class="col-sm-10">
{{--                                                <input class="form-control" name="our_representative"  id="inputName"--}}
{{--                                                       placeholder="Должность, ФИО">--}}
                                                <p>{{$diagnostic->our_representative}}</p>
                                            </div>
                                        </div>
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
    <style>
        @media (max-width: 575px) {
            .form-bord-ic {
                margin-left: 22px!important;
            }
        }

    </style>
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
