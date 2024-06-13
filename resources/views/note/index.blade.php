@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <!-- COLOR PALETTE -->

        <section class="content-header">
            <div class="container-fluid" style="display: flex; justify-content:center; flex-direction: row;">
                <div class="row mb-2" style="display: flex; ">
                    <h1>Заметки</h1>
                </div>
            </div>
        </section>


        <div class="row">
            <div class="col-md-12">
                <!-- /.card-header -->
                <div class="card-body">
                    @foreach($notes as $note)
                        <div class="callout callout-dark d-flex justify-content-between">
                            <div>
                                <a style="display: block; text-decoration: none; color: white"
                                   href="{{route('note.show', $note->id)}}">
                                    <h5>{{$note->title}}</h5>

                                    <p>{{$note->about}}</p>
                                </a>
                                <br>
                                <div style="display: flex; justify-content:space-between;">
                                    <a class="btn btn-light mr-1" href="{{route('note.edit', $note->id)}}" >Редактировать</a>
                                    <form action="{{route('note.delete', $note->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button style="display: block;" class="btn btn-secondary">Удалить</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- /.card-body -->
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>


    </div>
@endsection
