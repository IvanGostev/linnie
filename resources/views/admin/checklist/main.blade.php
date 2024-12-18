@extends('layouts.main')

@section('content')

    <section class="content-header">
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Чек листы для {{$user->name}}</h3>
                        <br>
                        <form action="{{route('admin.checklist.store')}}" method="post" class="form-group col-md-12">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Название</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title" id="inputName" required>
                                    </div>
                                </div>
                                <input hidden type="text" name="user_id" value="{{$user->id}}">
                                <button class="btn btn-light btn-sm btn-block">Создать</button>
                            </div>

                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Дата создания</th>
                                <th>Задачи</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($checklists as $checklist)

                                <tr>
                                    <td>{{$checklist->title}}</td>
                                    <td>{{$checklist->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.checklist.task.index',  $checklist->id)}}"
                                           class="btn btn-light">Задачи</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

    </section>

@endsection
