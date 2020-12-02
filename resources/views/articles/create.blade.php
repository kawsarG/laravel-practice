@extends('layout')

@section('content')
<div style="padding: 20px;max-width:700px; margin:auto">
    <h1 style="text-align: center;">New Article</h1>
    <form action="/articles" method="POST">
        @csrf

        <fieldset>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Write a title" required>
            <label for="excerpt">Excerpt</label>
            <textarea type="text" name="excerpt" id="excerpt" placeholder="Write a excerpt" required></textarea>
            <label for="body">Body</label>
            <textarea type="text" name="body" id="body" placeholder="Write an article" required></textarea>
            <button class="button-primary" type="submit">Submit</button>
        </fieldset>
    </form>
</div>
@endsection