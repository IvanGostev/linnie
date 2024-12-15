@extends('layouts.main')

@section('content')

    <section class="content-header">
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title d-flex">Задачи по {{$checklist->title}}</h3>
                        <br>
                        <form  action="{{route('admin.checklist.task.store')}}" method="post" class="form-group col-md-12">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Название</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title" id="inputName">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Описание</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="text" id="inputName"
                                               placeholder="Название"> </textarea>
                                    </div>
                                </div>
                                <input hidden type="text" name="checklist_id" value="{{$checklist->id}}">
                                <button class="btn btn-light btn-sm btn-block">Добавить</button>
                            </div>


                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Дата сдачи</th>
                                <th>Подробнее</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->title}}</td>
                                    <td>{{$task->status}}</td>
                                    <td>{{$task->created_at}}</td>
                                    <td>{{$task->status == 'Выполнена' ? $task->updated_at : '-'}}</td>
                                     <td>
                                         <a href="{{route('admin.checklist.task.show',  $task->id)}}" class="btn btn-light">Подробнее</a>
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
