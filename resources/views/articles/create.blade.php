@extends('layout')

@section('content')
<div style="padding: 20px;max-width:700px; margin:auto">
    <h1 style="text-align: center;">New Article</h1>
    <form action="/articles" method="POST">
        @csrf

        <fieldset>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Write a title" value="{{old('title')}}" required>
            @error('title')
            <p style="color:red">{{$errors->first()}}</p>
            @enderror
            <label for="excerp">Excerpt</label>
            <textarea type="text" name="excerp" id="excerp" placeholder="Write a excerpt" required>{{old('excerp')}}</textarea>
            @error('excerp')
            <p style="color:red">{{$errors->first()}}</p>
            @enderror
            <label for="body">Body</label>
            <textarea type="text" name="body" id="body" placeholder="Write an article" required>{{old('body')}}</textarea>
            @error('body')
            <p style="color:red">{{$errors->first()}}</p>
            @enderror
            <button class="button-primary" type="submit">Submit</button>
        </fieldset>
    </form>
</div>
@endsection