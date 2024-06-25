@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">
@endsection

@section('content')

<section class="items">
    <div class="items__inner">
        <div class="items__tab">
            <a class="items__tab-link" href="#">
                <span class="items__tab-link-text">おすすめ</span>
            </a>
            <a class="items__tab-link" href="#">
                <!-- クリックするとお気に入りリストに飛ぶ -->
                <span class="items__tab-link-text items__tab-link-text--gray">マイリスト</span>
            </a>
        </div>

        <div class="items-card">
            <div class="items-card__content w__inner">
                @foreach($items as $item)
                <figure class="items-card__content-img">
                    <a class="items-card__content-img-link" href="/item/{{$item->id}}">
                        <img src="{{ asset('storage/'.$item->image_url) }}" alt="出品された商品の画像" width="150" height="150">
                    </a>
                </figure>
                @endforeach
            </div>
        </div>
    </div>
</section>

    <!-- 以下に、マイリスト -->
@endsection