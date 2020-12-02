@extends('layout')

@section('content')
<div style="padding: 20px;">
    <h1> {{$article->title}}</h1>

    <figure>
        <a href="images/1.jpg" class="fancybox" rel="ligthbox">
            <img src="/images/1.jpg" alt="">
        </a>

    </figure>

    <p>{{$article->body}}</p>

</div>
@endsection