@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/purchase.css') }}">
@endsection

@section('content')
<section class="purchase">
    <div class="purchase__inner w__inner">
        <form class="purchase-form" action="">
            @csrf
            <div class="purchase-form__item">
                <div class="purchase-form__item-description">
                    <h1 class="purchase-form__item-name">{{ $purchase->name }}</h1>
                    <p class="purchase-form__item-price">&yen;{{ $purchase->price }}</p>
                </div>
                <figure>
                    <img class="purchase-form__item-img" src="{{ asset('storage/'.$purchase->image_url) }}" alt="購入する商品の画像" width="100" height="110">
                </figure>
            </div>
            <div class="purchase-form__payment">
                <h2 class="purchase-form__payment-title">支払い方法</h2>
                <p class="purchase-form__payment-item">
                    <a class="purchase-form__payment-item-link" href="#">変更する</a>
                </p>
            </div>
            <div class="purchase-form__address">
                <h2 class="purchase-form__address-title">配送先</h2>
                <p class="purchase-form__address-item">
                    <a class="purchase-form__address-item-link" href="/purchase/address/{{$purchase->id}}">
                        変更する
                    </a>
                </p>
            </div>
            <div class="purchase-form__button">
                <button class="purchase-form__button-submit">購入する</button>
            </div>
            <div class="purchase-form__confirm">
                <dl class="purchase-form__confirm-list">
                    <div class="purchase-form__confirm-list-flex">
                        <dt class="purchase-form__confirm-list-title">商品代金</dt>
                        <dd class="purchase-form__confirm-list-description">&yen;{{ $purchase->price }}</dd>
                    </div>
                    <div class="purchase-form__confirm-list-flex">
                        <dt class="purchase-form__confirm-list-title">支払い金額</dt>
                        <dd class="purchase-form__confirm-list-description">&yen;{{ $purchase->price }}</dd>
                    </div>
                    <div class="purchase-form__confirm-list-flex">
                        <dt class="purchase-form__confirm-list-title">支払い方法</dt>
                        <dd class="purchase-form__confirm-list-description">コンビニ払い</dd>
                    </div>
                </dl>
            </div>
        </form>
    </div>
</section>
@endsection