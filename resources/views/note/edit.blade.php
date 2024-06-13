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
            <form action="{{route('note.update', $note->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('patch')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Форма редактирования заметки</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название</label>
                                    <input name="title" class="form-control" value="{{$note->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Основная часть</label>
                                    <textarea name="text" class="form-control" rows="20">{{$note->text}}</textarea>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Изменить</button>
                            </div>
                        </div>


                    </div>

                </div>
            </form>

        </div>
    </section>
@endsection
