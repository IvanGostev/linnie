@extends('layouts.main')

@section('content')

    <section class="content-header">
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Пользователи и их Чек листы</h3>


                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Роль</th>
                                <th>Чек листы</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)

                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->role == 0 ? 'Мастер Бригады' : ( $user->role == 1 ? 'Инженер КИПиА' : 'Администратор') }}</td>
                                     <td>
                                         <a href="{{route('admin.checklist.main',  $user->id)}}" class="btn btn-info">Чек листы {{$user->checklistCount()}}</a>
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
