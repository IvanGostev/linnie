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
                        <div class="callout callout-info">
                            <a style="text-decoration: none; color: white" href="{{route('document.show', $document->id)}}">
                                <h5>{{$document->title}}</h5>

                                <p>{{$document->about}}</p>
                            </a>

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
