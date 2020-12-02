@extends('layout')

@section('content')

<ul style="text-align: center;padding:5px;">
    @foreach($articles as $article)
    <a href="articles/{{$article->id}}">
        <li style="text-align: center; border:1px solid red; padding:5px;">
            <h1>{{$article->title}}</h1>
            <p>{{$article->body}}</p>
        </li>
    </a>
    @endforeach

</ul>
<div id="about" class="about top_layer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>About Informations</h2>
                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="img-box">
                    <figure><img src="/images/about.png" alt="img" /></figure>
                    <a href="#">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection