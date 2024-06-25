@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<section class="login">
    <h1 class="login__title">ログイン</h1>
    <form class="login-form" action="/login" method="post">
        @csrf
        <div class="login-form__content">
            <div class="login-form__email">
                <label class="login-form__label" for="email">メールアドレス</label>
                <input class="login-form__input" type="text" id="email" name="email" value="{{ old('email') }}">
                <div class="login-form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="login-form__password">
                <label class="login-form__label" for="password">パスワード</label>
                <input class="login-form__input" type="text" id="password" name="password" value="{{ old('password') }}">
                <div class="login-form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="login-form__button">
                <button class="login__button-submit" type="submit">ログインする</button>
            </div>
        </div>
    </form>
    <div class="login__link">
        <a class="login__link-item" href="/register">会員登録はこちら</a>
    </div>
</section>

@endsection