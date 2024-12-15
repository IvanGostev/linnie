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

                                         @if($task->status != 'Выполнена')
                                             <a href="{{route('checklist.task.edit',  $task->id)}}" class="btn btn-light">Сдать</a>
                                         @else <a href="{{route('checklist.task.show',  $task->id)}}" class="btn btn-light">Подробнее</a>
                                         @endif


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
