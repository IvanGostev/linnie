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
                        <div class="callout callout-info d-flex justify-content-between">
                            <div>
                                <a style="display: block; text-decoration: none; color: white"
                                   href="{{route('document.show', $document->id)}}">
                                    <h5>{{$document->title}}</h5>

                                    <p>{{$document->about}}</p>
                                </a>
                                @if(auth()->user()->role == 2)
                                    <br>
                                    <form action="{{route('document.delete', $document->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button style="display: block;" class="btn btn-secondary">Удалить</button>
                                    </form>
                                @endif
                            </div>
                            <div>
                                @switch($document->extension())
                                    @case('xls')
                                        <img src="/fileimg/excel.svg" width="50px" height="50px">
                                        @break
                                    @case('xlsx')
                                        <img src="/fileimg/excel.svg" width="50px" height="50px">
                                        @break
                                    @case('doc')
                                        <img src="/fileimg/word.svg" width="50px" height="50px">
                                        @break
                                    @case('docx')
                                        <img src="/fileimg/word.svg" width="50px" height="50px">
                                        @break
                                    @case('ppt')
                                        <img src="/fileimg/powerpoint.svg" width="50px" height="50px">
                                        @break
                                    @case('pptx')
                                        <img src="/fileimg/powerpoint.svg" width="50px" height="50px">
                                        @break
                                    @case('pdf')
                                        <img src="/fileimg/pdf.svg" width="50px" height="50px">
                                        @break
                                    @default
                                        <img src="/fileimg/text.svg" width="50px" height="50px">

                                @endswitch

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
