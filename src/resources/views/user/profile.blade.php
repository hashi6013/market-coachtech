@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@endsection

@section('content')
<section class="profile">
    <div class="profile__inner w__inner">
        <h1 class="profile__title">プロフィール設定</h1>
        <form class="profile-form" action="/mypage/done" method="post">
            @csrf
            <div class="profile-form__content">
                <p class="profile-form__image">
                    <label class="profile-form__label-image" for="image">画像を選択する</label>
                    <input class="profile-form__input profile-form__input--image" type="file" id="image">
                </p>
                <div class="profile-form__content-layout">
                    <p class="profile-form__text">
                        <label class="profile-form__label" for="postcode">郵便番号</label>
                        <input class="profile-form__input" type="text" id="postcode" name="postcode" value="{{ old('postcode') }}">
                    </p>
                    <p class="profile-form__text">
                        <label class="profile-form__label" for="address">住所</label>
                        <input class="profile-form__input" type="text" id="address" name="address" value="{{ old('address') }}">
                    </p>
                    <p class="profile-form__text">
                        <label class="profile-form__label" for="building">建物名</label>
                        <input class="profile-form__input" type="text" id="building" name="building" value="{{ old('building') }}">
                    </p>
                    <input type="hidden" name="user_id" value="user_id">
                </div>
                <div class="profile-form__button">
                    <button class="profile-form__button-submit" type="submit">更新する</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection