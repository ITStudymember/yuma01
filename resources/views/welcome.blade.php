@extends('layouts.app')

@section('link')
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/welcome.css">
@endsection

@section('content')
    <div class="top_img_area">
        <img class="top_img" src="/images/site_images/top.png">
    </div>
    @foreach($articles as $article)
        <p><a href="/{{ $article->id }}">{{ $article->title }}</a></p>
    @endforeach
@endsection
