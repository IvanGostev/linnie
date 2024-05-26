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
                                <a href="{{route('admin.diagnostic.index')}}" type="submit" class="btn btn-info btn-block"><b>Диагностики</b></a>
                                <a href="{{route('admin.user.index')}}" type="submit" class="btn btn-secondary btn-block"><b>Пользователи</b></a>
                                <a href="{{route('admin.reason.index')}}" type="submit" class="btn btn-secondary btn-block"><b>Причины</b></a>

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
