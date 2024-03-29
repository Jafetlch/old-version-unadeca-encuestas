@extends('layouts.home')
@section('home_content')
    <div class="body-header feather-card">
        <span>Cuatrimestre</span>
    </div>
    <div class="body-content feather-card">
        <div class="body-content-item">
            <div class="body-content-item-title">
                <span>Editar</span>
            </div>
            <div class="body-content-item-body">
                {!! Form::model($quarter, ['route' => ['quarters.update', $quarter->id], 'method' => 'PUT']) !!}
                    @include('quarters.partials.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection