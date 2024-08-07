@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/item.css') }}">
@endsection

@section('content')
<section class="item-detail">
    <div class="item-detail__inner w__inner">
        <div class="item-detail-about">
            <h1 class="item-detail-about__title">{{ $item_detail->name }}</h1>
            <p class="item-detail-about__brand">ブランド名</p>
            <p class="item-detail-about__price">&yen;{{ $item_detail->price }}(値段)</p>
            <form class="item-detail-form" action="#">
                @csrf
                <div class="item-detail-form__content">
                    @if(Auth::check())
                        @if($item_detail->favorite_by_auth_user())
                        <a class="item-detail-form__content-link" href="{{ route('item.unlike', ['id' => $item_detail->id]) }}">
                            <i class="fa-regular fa-star"></i>
                        </a>
                        @else
                        <a class="item-detail-form__content-link item-detail-form__content-link--favorite" href="{{ route('item.favorite', ['id' => $item_detail->id]) }}">
                            <i class="fa-regular fa-star"></i>
                        </a>
                        @endif
                    @endif

                    @if(Auth::check())
                        <a class="item-detail-form__content-comment" href="/comment?id={{$item_detail->id}}">
                            <i class="fa-regular fa-comment"></i>
                        </a>
                    @endif
                </div>
            </form>
            <a class="item-detail-about__link" href="/purchase/{{$item_detail->id}}">
                購入する
            </a>

            <section class="item-detail-about-description">
                <h2 class="item-detail-about-description__title">商品説明</h2>
                <p class="item-detail-about-description__text">{{ $item_detail->description }}</p>
            </section>

            <section class="item-detail-about-description">
                <h2 class="item-detail-about-description__title">商品の情報</h2>
                <section class="item-detail-about-category">
                    <div class="item-detail-about-layout">
                        <h3 class="item-detail-about-category__title">カテゴリー</h3>
                        @foreach($categories as $category)
                        <p>{{ $category->category->name }}</p>
                        @endforeach
                    </div>
                </section>
                <section class="item-detail-about-condition">
                    <div class="item-detail-about-layout">
                        <h3 class="item-detail-about-condition__title">商品の状態</h3>
                        <p class="item-detail-about-condition__text">{{ $item_detail->condition->condition }}</p>
                    </div>
                </section>
            </section>
        </div>
        <div class="item-detail-img">
            <figure class="item-detail-img__content">
                <img class="item-detail-img__item" src="{{ asset('storage/'.$item_detail->image_url) }}" alt="" width="240" height="360">
            </figure>
            <div class="item-detail-img-layout">
                <a class="item-detail-img__link item-detail-about__link" href="/comment?id={{ $item_detail->id }}">コメントする</a>
            </div>
        </div>
    </div>
</section>

@endsection