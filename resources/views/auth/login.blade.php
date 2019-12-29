@extends('layout')

@section('content')
    <h1 class="title">登入</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="field">
            <label class="label">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="input" name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label class="label">{{ __('Password') }}</label>
            <input id="password" type="password" class="input"
                   name="password" required autocomplete="current-password">

            @error('password')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label class="checkbox">
                <input type="checkbox" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Remember Me') }}
            </label>
        </div>

        <div class="field">
            <button type="submit" class="button is-link">{{ __('Login') }}</button>

            {{--@if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif--}}
        </div>

    </form>

@endsection
