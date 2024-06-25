@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/comment.css') }}">
@endsection

@section('content')
<section class="comment">
    <div class="comment__inner w__inner">
        <div class="comment-about">
            <h1 class="comment-about__title">{{ $comment->name }}</h1>
            <p class="comment-about__brand">ブランド名</p>
            <p class="comment-about__price">&yen;{{ $comment->price }}(値段)</p>
            <form class="icon-form" action="#">
                @csrf
                <div class="icon-form__content">
                    <span class="icon-form__content-item">
                        <i class="fa-regular fa-star"></i>
                    </span>
                    <span class="icon-form__content-item icon-form__content-item--favorite">
                        <i class="fa-regular fa-comment"></i>
                    </span>
                </div>
            </form>
            <form class="comment-form" action="#">
                @csrf
                <p class="comment-form__content">
                    <label class="comment-form__content-label" for="name1">名前</label>
                    <input class="comment-form__content-input" type="text" id="name1">
                </p>
                <p class="comment-form__content">
                    <label class="comment-form__content-label" for="name2">名前</label>
                    <input class="comment-form__content-input" type="text" id="name2">
                </p>
                <p class="comment-form__content comment-form__content--reverse">
                    <label class="comment-form__content-label" for="name3">名前</label>
                    <input class="comment-form__content-input" type="text" id="name3">
                </p>
                <p class="comment-form__content">
                    <label class="comment-form__content-label" for="name4">商品へのコメント</label>
                    <textarea class="comment-form__content-input comment-form__content-input--textarea" name="" id="name4"></textarea>
                </p>
                <button class="comment-form__content-submit">コメントを送信する</button>
            </form>
        </div>
        <div class="comment-img">
            <figure class="comment-img__content">
                <img class="comment-img__item" src="{{ asset('storage/'.$comment->image_url) }}" alt="" width="240" height="360">
            </figure>
        </div>
    </div>
</section>

@endsection