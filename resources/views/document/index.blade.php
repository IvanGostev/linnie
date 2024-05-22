@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <!-- COLOR PALETTE -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2" style="justify-content: center">
                    <h1>Документы</h1>

                </div>
            </div><!-- /.container-fluid -->
        </section>


        <div class="row">
            <div class="col-md-12">
                <!-- /.card-header -->
                <div class="card-body">
                    @foreach($documents as $document)
                        <div class="callout callout-info justify-content-between">
                            <a style="display: block; text-decoration: none; color: white" href="{{route('document.show', $document->id)}}">
                                <h5>{{$document->title}}</h5>

                                <p>{{$document->about}}</p>
                            </a>
                            @if(auth()->user()->role == 2)
                                <br>
                                <a href="{{route('document.edit', $document->id)}}" style="display: block; "  class="btn btn-secondary">Прикрепленные файлы</a>
                            @endif
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
