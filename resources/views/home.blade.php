@extends('layouts.main')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2" style="justify-content: center">
                <h1>Заявки</h1>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row">
            {{--            <div class="col-md-3">--}}
            {{--                <div class="card card-outline card-success collapsed-card">--}}
            {{--                    <div class="card-header">--}}
            {{--                            <h3 class="card-title"  style="display: flex; justify-content: space-between">Повреждения кабеля сенсора нагрузки   </h3>--}}


            {{--                        <div class="card-tools">--}}
            {{--                            <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
            {{--                                <i class="fas fa-minus" style="color: white"></i>--}}
            {{--                            </button>--}}
            {{--                        </div>--}}
            {{--                        <br>--}}
            {{--                        <span>24.07.2023 18:40</span>--}}
            {{--                        <br>--}}
            {{--                        <span style="color: #00bc8c"><i class="fa-solid fa-play"></i> Новая</span>--}}
            {{--                        <!-- /.card-tools -->--}}
            {{--                    </div>--}}
            {{--                    <!-- /.card-header -->--}}
            {{--                    <div class="card-body" style="display: none">--}}
            {{--                        The body of the card--}}
            {{--                    </div>--}}
            {{--                    <!-- /.card-body -->--}}
            {{--                </div>--}}
            {{--                <!-- /.card -->--}}
            {{--            </div>--}}
            @foreach($problems as $problem)
                <div class="col-md-3">
                    <div
                        class="card card-outline card-{{$problem->status == 'Новая' ? 'success' : ($problem->status == 'В работе' ? 'warning' : ($problem->status == 'Завершено' ? 'info' : 'danger'))}} collapsed-card">
                        <div class="card-header">
                            <a href="{{route('problem.show', $problem->id)}}" style="color: white;">
                                <h3 class="card-title"
                                    style="display: flex; justify-content: space-between">{{$problem->reason()->title}}</h3>
                            </a>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus" style="color: white"></i>
                                </button>
                            </div>
                            <br>

                            <span>{{$problem->created_at->format('d.m.Y h:i')}}</span>


                            <br>
                            @if($problem->status == 'Новая')
                                <span style="color: #00bc8c"><i
                                        class="fa-solid fa-play"></i> {{$problem->status}}</span>

                            @elseif($problem->status == 'В работе')
                                <span style="color: #ffc107"> <i
                                        class="fa-regular fa-clock"></i>{{$problem->status}} <span style="color: white">({{$problem->user()->name}})</span></span>

                            @elseif($problem->status == 'Завершено')
                                <span style="color: #17a2b8"><i
                                        class="far fa-check-circle"></i> {{$problem->status}}</span>
                            @elseif($problem->status == 'Простой')
                                <span style="color: #dc3545"><i
                                        class="fa-solid fa-pause"></i> {{$problem->status}}</span>
                            @endif


                            <br>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: none">
                            {{$problem->text}}
                            <div style="display: flex; justify-content:space-between;">
                                {{--                                @if(auth()->user()->role > 0 and !($problem->reportCount()))--}}
                                {{--                                    <a href={{route('report.create', $problem->id)}}><i class="fas fa-file-alt"></i>Написать--}}
                                {{--                                        отчет</a>--}}
                                {{--                                @endif--}}
                                {{--                                @if(auth()->user()->role > 1 and $problem->reportCount())--}}
                                {{--                                    <a href={{route('report.show', $problem->report()->id)}}><i--}}
                                {{--                                            class="fas fa-file-alt"></i>Посмотреть--}}
                                {{--                                        отчет</a>--}}
                                {{--                                @endif--}}
                                @if(auth()->user()->role == 1)
                                    <form action="{{route('problem.work', $problem->id)}}" enctype="multipart/form-data"
                                          method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-block mr-2"><i
                                                class="fa-solid fa-pen-to-square"></i>Взять в работу
                                        </button>
                                    </form>
                                @endif
                                @if($problem->user_id == auth()->user()->id || auth()->user()->role == 2)
                                    <form action="{{route('problem.delete', $problem->id)}}" method="post" class="mr-2">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-block "><i
                                                class="fa-solid fa-trash"></i> Удалить
                                        </button>
                                    </form>
                                @endif
                                @if(auth()->user()->role == 2)
                                        <a href="{{route('problem.edit', $problem->id)}}" class="btn btn-primary btn-block"><i class="fas fa-edit"></i> <br> Редактировать</a>
                                @endif
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            @endforeach

        </div>
    </section>
@endsection
