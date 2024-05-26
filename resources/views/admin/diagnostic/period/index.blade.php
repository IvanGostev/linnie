@extends('layouts.main')

@section('content')

    <section class="content-header">
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.diagnostic.period.create')}}" type="submit" class="btn btn-success btn-block"><b>Добавить период</b></a>
                <br>
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Периоды</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Дата создания</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($periods as $period)

                                    <tr>
                                        <td>{{$period->created_at}}</td>
                                        <td class="text-right align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('admin.diagnostic.period.show',  $period->id)}}" class="btn btn-info"><i
                                                        class="fas fa-eye"></i></a>
                                                <form action="{{route('admin.diagnostic.period.delete', $period->id)}}" method="post">
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
