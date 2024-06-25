@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@endsection

@section('content')
<section class="profile">
    <div class="profile__inner w__inner">
        <h1 class="profile__title">プロフィール設定</h1>
        <form class="profile-form" action="">
            @csrf
            <div class="profile-form__content">
                <p class="profile-form__image">
                    <label class="profile-form__label-image" for="image">画像を選択する</label>
                    <input class="profile-form__input profile-form__input--image" type="file" id="image">
                </p>
                <div class="profile-form__content-layout">
                    <p class="profile-form__text">
                        <label class="profile-form__label" for="name">ユーザー名</label>
                        <input class="profile-form__input" type="text" id="name">
                    </p>
                    <p class="profile-form__text">
                        <label class="profile-form__label" for="postcode">郵便番号</label>
                        <input class="profile-form__input" type="text" id="postcode">
                    </p>
                    <p class="profile-form__text">
                        <label class="profile-form__label" for="address">住所</label>
                        <input class="profile-form__input" type="text" id="address">
                    </p>
                    <p class="profile-form__text">
                        <label class="profile-form__label" for="building">建物名</label>
                        <input class="profile-form__input" type="text" id="building">
                    </p>
                </div>
                <div class="profile-form__button">
                    <button class="profile-form__button-submit">更新する</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection