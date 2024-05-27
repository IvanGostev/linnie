@extends('layouts.main')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2" style="justify-content: center">
                <h1>Уведомления</h1>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        @foreach(notifications() as $notification)
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        @switch($notification['type'])
                            @case('work')
                                <a href="{{route('problem.show', $notification->problem()->id)}}" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i>Заявку {{$notification->problem()->id}} взял в
                                    работу {{$notification->name}}
                                </a>
                                @break;
                            @case('work')
                                <a href="{{route('report.show', $notification->problem()->id)}}" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i>{{$notification->name}} сдал отчет по
                                    заявке {{$notification->problem()->id}}
                                </a>
                                @break;
                            @case('documents')
                                <a href="{{route('document.index')}}" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> Документы обновлены
                                </a>
                                @break;
                            @case('mydocuments')
                                <a href="{{route('profile.index')}}" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Мои документы обновлены
                                </a>
                                @break;
                        @endswitch
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach(oldNotifications() as $notification)
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        @switch($notification['type'])
                            @case('work')
                                <a href="{{route('problem.show', $notification->problem()->id)}}" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i>Заявку {{$notification->problem()->id}} взял в
                                    работу {{$notification->name}}
                                </a>
                                @break;
                            @case('work')
                                <a href="{{route('report.show', $notification->problem()->id)}}" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i>{{$notification->name}} сдал отчет по
                                    заявке {{$notification->problem()->id}}
                                </a>
                                @break;
                            @case('documents')
                                <a href="{{route('document.index')}}" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> Документы обновлены
                                </a>
                                @break;
                            @case('mydocuments')
                                <a href="{{route('profile.index')}}" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Мои документы обновлены
                                </a>
                                @break;
                        @endswitch
                    </h3>
                    <div class="card-tools">

                    </div>
                </div>
            </div>
        @endforeach


    </section>
@endsection
