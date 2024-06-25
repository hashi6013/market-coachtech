@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/sell.css') }}">
@endsection

@section('content')
<section class="sell">
    <div class="sell__inner w__inner">
        <h1 class="sell__title">商品の出品</h1>
        <form class="sell-form" action="">
            @csrf
            <div class="sell-form__content">
                <p class="sell-form__content-label">商品画像</p>
                <div class="sell-form__content-image">
                    <label class="sell-form__content-label sell-form__content-label-image" for="image">
                    画像を選択する
                    </label>
                    <input class="sell-form__content-input sell-form__content-input--image" type="file" id="image">
                </div>
            </div>
            <div class="sell-form__layout">
                <h2 class="sell-form__title">商品の詳細</h2>
                <div class="sell-form__layout-inner">
                    <p class="sell-form__content">
                    <label class="sell-form__content-label" for="category">
                        カテゴリー
                    </label>
                    <select class="sell-form__content-input" name="" id="category"></select>
                    </p>
                    <p class="sell-form__content">
                        <label class="sell-form__content-label" for="condition">
                            商品の状態
                        </label>
                        <select class="sell-form__content-input" name="" id="condition"></select>
                    </p>
                </div>
            </div>
            <div class="sell-form__layout">
                <h3 class="sell-form__detail">商品名と説明</h3>
                <div class="sell-form__layout-inner">
                    <p class="sell-form__content">
                        <label class="sell-form__content-label" for="name">
                            商品名
                        </label>
                        <input type="text" class="sell-form__content-input" id="name">
                    </p>
                    <p class="sell-form__content">
                        <label class="sell-form__content-label" for="description">
                            商品の説明
                        </label>
                        <textarea class="sell-form__content-input" name="" id="description"></textarea>
                    </p>
                </div>
            </div>
            <div class="sell-form__layout">
                <h3 class="sell-form__detail">販売価格</h3>
                <div class="sell-form__layout-inner">
                    <p class="sell-form__content">
                        <label class="sell-form__content-label sell-form__content-label--price" for="price">
                            販売価格
                        </label>
                        <input class="sell-form__content-input sell-form__content-input--price" type="text" id="price">
                        <!-- <span class="sell-form__content-input-icon">&yen;</span> -->
                    </p>
                </div>
            </div>
            <div class="sell-form__button">
                <button class="sell-form__button-submit">出品する</button>
            </div>
        </form>
    </div>
</section>
@endsection