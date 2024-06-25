@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/address.css') }}">
@endsection

@section('content')
<section class="address">
    <div class="address__inner w__inner">
        <h1 class="address__title">住所の変更</h1>
        <form class="address-form" action="#">
            @method('PATCH')
            @csrf
            <div class="address-form__content">
                <p class="address-form__content-input">
                    <label class="address-form__content-input-label" for="postcode">郵便番号</label>
                    <input class="address-form__content-input-text" type="text" id="postcode">
                </p>
                <p class="address-form__content-input">
                    <label class="address-form__content-input-label" for="address">住所</label>
                    <input class="address-form__content-input-text" type="text" id="address">
                </p>
                <p class="address-form__content-input">
                    <label class="address-form__content-input-label" for="building">建物名</label>
                    <input class="address-form__content-input-text" type="text" id="building">
                </p>
                <button class="address-form__content-button">更新する</button>
            </div>
        </form>
    </div>
</section>
@endsection