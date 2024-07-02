@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/list.css') }}">
@endsection

@section('content')
@foreach($favorites as $favorite)
<p>{{$favorite->user_id}}</p>
@endforeach

@endsection