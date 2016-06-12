@extends('layouts.app')

@section('link')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
    <script src="js/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/article_detail.css">
@endsection
@section('content')

<script>
    $(function () {
       $('.image-click').click(function () {
           console.log('成功');
       }) ;
    });
</script>
@endsection
