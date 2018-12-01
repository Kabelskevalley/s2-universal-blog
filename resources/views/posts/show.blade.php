@extends('layouts.app')

@section('title', 'Post Bearbeiten')

@section('content')

  <h1 class="title">Post Anzeigen</h1>

  <p>{{ $post->body }}</p>

  <a href="{{ action('PostController@edit', ['id' => $post->id]) }}">Edit</a>

@endsection
