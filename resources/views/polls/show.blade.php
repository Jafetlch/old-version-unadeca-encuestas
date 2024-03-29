@extends('layouts.home')
@section('home_content')
    <div class="body-header feather-card">
        <span>Polls</span>
    </div>
    <div class="body-content feather-card">
        <div class="body-content-item">
            <div class="body-content-item-title">
                <span>Details of Polls</span>
            </div>
            <div class="body-content-item-title">
                <span>Title:</span>
                <p>{{ $poll->titles->title }}</p>
            </div>
            <div class="body-content-item-title">
                <span>Title of poll description:</span>
                <p>{{ $poll->titleDescription }}</p>
            </div>
            <div class="body-content-item-title">
                <span>Description:</span>
                <p>{{ $poll->description }}</p>
            </div>
            <div class="body-content-item-title">
                <span>Instruction:</span>
                <p>{{ $poll->instruction }}</p>
            </div>
            <div class="body-content-item-title">
                <span>Cuatrimestre:</span>
                <p>{{ $poll->quarters->name }} <span>({{$poll->quarters->init_date}} - {{$poll->quarters->end_date}})</span></p>
            </div>
            <div class="body-content-item-title">
                <span>Facultad:</span>
                @foreach($poll->faculties as $faculty)
                    <p>{{ $faculty->name }}</p>
                @endforeach
            </div>
            <div class="body-content-item-title">
                <span>Enable:</span>
                @if($poll->isClose == '0')
                    <p class="red-text">
                            False
                        </p>
                @else
                    <p class="green-text">
                            True
                        </p>
                @endif
            </div>
        </div>
        <div class="body-content-item">
            <div class="body-content-item-title">
                <span>Profesores</span>
            </div>
            <div class="body-content-item-body">
                <ul class="collection">
                    @foreach($poll->professors as $professor)
                        <li class="collection-item">{{$professor->name}}</li>
                        {{--@foreach($poll->professors as$professor)--}}
                        {{--@endforeach--}}
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="body-content-item">
            <div class="body-content-item-title">
                <span>Materias</span>
            </div>
            <div class="body-content-item-body">
                <ul class="collection">
                    @foreach($polls as $poll)
                        @foreach($poll->subjects as $subject)
                            <li class="collection-item">{{$subject->name}}</li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="body-content-item">
            <div class="body-content-item-title">
                <span>Preguntas</span>
            </div>
            <div class="body-content-item-body">
                <ul class="collection">
                    @foreach($polls as $poll)
                        @foreach($poll->questions as $question)
                            <li class="collection-item">{{$question->question}}</li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
        {{--<div class="body-content-item">--}}
            {{--<div class="body-content-item-title">--}}
                {{--<span>Questions</span>--}}
            {{--</div>--}}
            {{--<div class="body-content-item-body">--}}
                {{--<ul class="collection">--}}
                    {{--@foreach($questions as $question)--}}
                            {{--<li class="collection-item">{{$question->question}}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection