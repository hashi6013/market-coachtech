@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/mypage.css') }}">
@endsection

@section('content')
<section class="mypage">
    <div class="mypage__inner">
        <div class="mypage__header">
            <h1 class="mypage__title">ユーザー名</h1>
            <a class="mypage__link" href="#">プロフィールを編集</a>
        </div>
        <div class="mypage__content">
            <div class="mypage__content-link">
                <a class="mypage__content-link-item" href="">出品した商品</a>
                <a class="mypage__content-link-item mypage__content-link-item--purchase" href="">購入した商品</a>
            </div>
            <div class="mypage__card w__inner">
                <div class="mypage__card-layout">
                    @foreach($profiles as $profile)
                    <figure class="mypage__card-img">
                        <a class="mypage__card-link" href="#">
                            <img class="mypage__card-link-item" src="{{ asset('storage/'.$profile->image_url) }}" alt="商品の画像" width="150" height="150">
                        </a>
                    </figure>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection