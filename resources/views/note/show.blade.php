@extends('layouts.main')

@section('content')
    <section class="content-header">
    </section>
    <section class="content">

        <div class="container-fluid">
            <form action="{{route('note.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-light">
                            <div class="card-header">
                                <h3 class="card-title">{{$note->title}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Основная часть</label>
                                    <p>{{$note->text}}</p>
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
