@extends('layouts.main')

@section('content')
    <section class="content-header">
    </section>
    <section class="content">

        <div class="container-fluid">
            <form action="{{route('document.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">{{$document->title}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Описание</label>
                                    <p>{{$document->about}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Основная часть</label>
                                    <p>{{$document->text}}</p>
                                </div>
                                <div class="card card-success">
                                    {{--                                        <div class="card-header">--}}
                                    {{--                                            <h3 class="card-title">Фотографии</h3>--}}

                                    {{--                                            <div class="card-tools">--}}
                                    {{--                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"--}}
                                    {{--                                                        title="Collapse">--}}
                                    {{--                                                    <i class="fas fa-minus"></i>--}}
                                    {{--                                                </button>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    <div class="card-body">
                                        <h6>Прикрепленные файлы:</h6>
                                        @foreach($document->files() as $file)
                                            <div class="form-group">
                                                <a download="{{$file->title}}" href="{{ asset('storage/' . $file->src) }}">{{$file->title}}</a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>

                            <!-- /.card-body -->

                        </div>


                    </div>

                </div>
            </form>

        </div>
    </section>
@endsection
