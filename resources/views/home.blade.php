@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div>
                @foreach($articles as $article)
                    <p><a href="/{{ $article->id }}">{{ $article->title }}</a></p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
