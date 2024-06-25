@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<section class="register">
    <h1 class="register__title">会員登録</h1>
    <form class="register-form" action="/register" method="post">
        @csrf
        <div class="register-form__content">
            <div class="register-form__email">
                <label class="register-form__label" for="email">メールアドレス</label>
                <input class="register-form__input" type="text" id="email" name="email" value="{{ old('email') }}">
                <div class="register-form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-form__password">
                <label class="register-form__label" for="password">パスワード</label>
                <input class="register-form__input" type="text" id="password" name="password" value="{{ old('password') }}">
                <div class="register-form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-form__button">
                <button class="register__button-submit" type="submit">登録する</button>
            </div>
        </div>
    </form>
    <div class="register__link">
        <a class="register__link-item" href="/login">ログインはこちら</a>
    </div>
</section>

@endsection