@extends('layouts.main')

@section('content')

    <section class="content-header">
    </section>
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Заявка №{{$problem['id']}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Причина</label>
                                <h6>{{$problem['reason']}}</h6>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Статус</label>
                                <p>{{$problem['status']}}</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Примечание</label>
                                <p>{{$problem['text']}}</p>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Просмотр отчета</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Комметарий</label>
                                <p>{{$report['comment']}}</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание проведённых работ</label>
                                <p>{{$report['work']}}</p>
                            </div>
                        </div>

                        <!-- /.card-body -->

                        {{--                        <div class="card-footer">--}}
                        {{--                            <button type="submit" class="btn btn-secondary">Изменить</button>--}}
                        {{--                        </div>--}}

                    </div>


                </div>

            </div>


        </div>
    </section>
@endsection
