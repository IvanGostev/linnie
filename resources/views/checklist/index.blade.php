@extends('layouts.main')

@section('content')

    <section class="content-header">
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Мои чек листы</h3>
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
                                        <a href="{{route('checklist.task.index',  $checklist->id)}}"
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
