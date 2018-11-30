@extends('layout')

@section('title', 'Neuer Post')

@section('content')

  <h1 class="title">Post erstellen</h1>

  <form method="POST" action="{{ action('PostController@store') }}">

    @csrf

    <div>
      <label for="post_body">Neuer Post Inhalt:</label>
      <textarea id="post_body" name="body" placeholder="Ein neuer Post" required>{{ old('body') }}</textarea>
    </div>
    <div>
      <button type="submit">Create Post</button>
    </div>

    @include('layouts.errors')

  </form>
@endsection
