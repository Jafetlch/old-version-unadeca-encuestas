@extends('layouts.app')

@section('content')
    <div class="login-container">
        <div class="logo-container">
            <img src="{{ asset('images/unadeca/logo_color_up.svg') }}" alt="unadeca-logo">
        </div>
        <div>
            <p>Register</p>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            @if ($errors->has('code'))
                <span class="help-block">
                    <strong>{{ $errors->first('code') }}</strong>
                </span>
            @endif
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('register.create') }}">
            {{ csrf_field() }}

            <div class="input-field form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="mat-label">
                    <span class="black-text">Username</span>
                </label>
                <input id="name" class="active validate form-control" name="name" type="text" value="{{ old('name') }}" required>
            </div>

            <div class="input-field form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                <label for="code" class="mat-label">
                    <span class="black-text">Code</span>
                </label>
                <input id="code" class="active validate form-control" name="code" type="text" value="{{ old('code') }}" required >
            </div>

            <div class="input-field form-group">
                <select id="faculties_id" name="faculties_id">
                    {{--<option value="" disabled selected>Faculty</option>--}}
                    @foreach($faculties as $faculty)
                        <option value="{{ $faculty->id }}" required autofocus>{{ $faculty->name }}</option>
                    @endforeach
                </select>
                <label>Faculty</label>
            </div>

            <div class="input-field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="mat-label">
                    <span class="black-text">Email</span>
                </label>
                <input id="email" class="active validate form-control" name="email" type="email" value="{{ old('email') }}" required>
            </div>

            <div class="input-field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="mat-label">
                    <span class="black-text">Password</span>
                </label>
                <input id="password" class="active validate form-control" name="password" type="password" value="{{ old('password') }}" required>
            </div>

            <div class="input-field form-group">
                <label for="password-confirm" class="mat-label">
                    <span class="black-text">Confirm Password</span>
                </label>
                <input id="password-confirm" class="active validate form-control" name="password_confirmation" type="password" required>
            </div>
            {{----}}
            <div class="form-group center-align">
                <button type="submit" class="waves-effect waves-light btn unadeca-btn">
                    Register
                </button>
            </div>
            <div class="form-group center-align" style="margin: 15px 0">
                <span>or</span>
            </div>
            <div class="form-group center-align">

                <a href="{{ route('login') }}" class="waves-effect waves-light btn unadeca-btn">
                    Back
                </a>
            </div>
        </form>
    </div>
@endsection
