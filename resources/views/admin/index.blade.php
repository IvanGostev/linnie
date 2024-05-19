@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <!-- COLOR PALETTE -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2" style="justify-content: center">
                    <h1>Настройки</h1>

                </div>
            </div><!-- /.container-fluid -->
        </section>


        <div class="row">
            <div class="col-md-12">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <a href="{{route('admin.user.create')}}" type="submit" class="btn btn-primary btn-block"><b>Создать пользователя</b></a>
                                <a href="{{route('admin.user.index')}}" type="submit" class="btn btn-primary btn-block"><b>Пользователи</b></a>
                                <a href="#" type="submit" class="btn btn-primary btn-block"><b>Диагностики</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card-body -->
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>


    </div>
@endsection
