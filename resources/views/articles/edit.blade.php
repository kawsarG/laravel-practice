@extends('layout')

@section('content')
<div style="padding: 20px;max-width:700px; margin:auto">
    <h1 style="text-align: center;">Edit Article</h1>
    <form action="/articles/{{$article->id}}" method="POST">
        @csrf
        @method('PUT')
        <fieldset>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Write a title" value="{{$article->title}}" required>
            <label for="excerp">Excerpt</label>
            <textarea type="text" name="excerp" id="excerp" placeholder="Write a excerpt" required>{{$article->excerp}}</textarea>
            <label for="body">Body</label>
            <textarea type="text" name="body" id="body" placeholder="Write an article" required>{{$article->body}}

            </textarea>
            <button class="button-primary" type="submit">Submit</button>
        </fieldset>
    </form>
</div>
@endsection