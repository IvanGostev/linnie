@extends('layouts.main')

@section('content')

    <section class="content-header">
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.user.create')}}" type="submit" class="btn btn-success btn-block"><b>Добавить</b></a>
                <br>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Пользователи</h3>


                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Роль</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)

                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->role == 0 ? 'Мастер Бригады' : ( $user->role == 1 ? 'Инженер КИПиА' : 'Администратор') }}</td>
                                    <td class="text-right align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{route('admin.user.edit',  $user->id)}}" class="btn btn-info"><i
                                                    class="fas fa-eye"></i></a>
                                            <form action="{{route('admin.user.delete', $user->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type='submit' class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>

                                        </div>
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
