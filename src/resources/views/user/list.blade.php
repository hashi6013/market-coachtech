@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/list.css') }}">
@endsection

@section('content')
<section class="list">
    <div class="list__inner w__inner">
    @foreach($favorites as $favorite)
        @foreach($image as $favorite_image)
        <figure>
            <img src="{{ asset('storage/'.$favorite_image->item->image_url) }}" alt="">
        </figure>
        @endforeach
    @endforeach
    </div>
</section>

@endsection