@extends('layouts.main')

@section('content')

    <section class="content-header">
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.diagnostic.period.index')}}" type="submit" class="btn btn-success btn-block"><b>Периоды</b></a>
                <br>
                @if ($period != null)
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Диагностики. Период от {{$period->created_at}} </h3>


                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Диагностика</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($period->users() as $user)

                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            @if($user['diagnostic'])
                                                <a href="{{route('admin.diagnostic.show',  $user->diagnostic($period->id)->id)}}"
                                                   class="d-block btn btn-light">
                                                    Посмотреть
                                                </a>
                                                <br>
{{--                                                <a href="{{route('admin.user.edit',  $user->id)}}"--}}
{{--                                                   class="d-block btn btn-outline-secondary">--}}
{{--                                                    Редактировать--}}
{{--                                                </a>--}}
                                            @else
                                                <a href="{{route('admin.diagnostic.create',  ['user' => $user->id, 'period' => $period->id])}}"
                                                   class="d-block btn btn-secondary">
                                                    Написать
                                                </a>
                                            @endif</td>

                                        <td class="text-right align-middle">
                                            <div class="btn-group btn-group-sm justify-content-between">
                                                @if($user['diagnostic'])

                                                <form class="d-block" action="{{route('admin.diagnostic.delete', $user->diagnostic($period->id)->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type='submit' class="btn btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                @endif

            </div>
        </div>

    </section>

@endsection
