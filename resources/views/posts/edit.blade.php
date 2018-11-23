@extends('layout')

@section('title', 'Post Bearbeiten')

@section('content')

  <h1 class="title">Post Bearbeiten</h1>

  <form method="POST" action="{{ action('PostController@update', ['id' => $post->id]) }}">

    @method('PATCH')
    @csrf

    <div class="form-group">
      <label for="post_body">Post Inhalt:</label>
      <textarea id="post_body" name="body" placeholder="Ein neuer Post" required>{{ $post->body }}</textarea>
    </div>

    @include('errors')

    <div class="form-group">
      <button type="submit" class="btn">Update Post</button>
    </div>

  </form>

  <form method="POST" action="{{ action('PostController@destroy', ['id' => $post->id]) }}">

    @method('DELETE')
    @csrf

    <div class="form-group">
      <button type="submit" class="btn">Delete Post</button>
    </div>
  </form>
@endsection
