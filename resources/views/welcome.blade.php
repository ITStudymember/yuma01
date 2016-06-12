@extends('layouts.app')

@section('link')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
    <script src="js/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/welcome.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="gimmicCarousel_sample">
                    <ul class="slider">
                    <li><img src="images/samples/sample01.jpg" width="800" height="600" alt=""></li>
                    <li><img src="images/samples/sample02.jpg" width="800" height="600" alt=""></li>
                    <li><img src="images/samples/sample03.jpg" width="800" height="600" alt=""></li>
                    <li><img src="images/samples/sample04.jpg" width="800" height="600" alt=""></li>
                    <li><img src="images/samples/sample05.jpg" width="800" height="600" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @foreach($articles as $article)
        <p><a href="/{{ $article->id }}">{{ $article->title }}</a></p>
    @endforeach

    <script>
        $(function () {

            //カルーセルの設定
            $('.gimmicCarousel_sample .slider').slick({
                accessibility: true,
                dots: true,
                autoplay: true,
                autoplaySpeed:3000,
                infinite: true,
                speed: 500
            });
        });
    </script>
@endsection
