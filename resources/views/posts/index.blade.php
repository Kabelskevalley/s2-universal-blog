@extends('layout')

@section('title', 'News')

@section('content')

  <h1 class="title">News</h1>

  <div>
    @foreach ($posts as $post)
      <a href="{{ action('PostController@show', ['id' => $post->id]) }}">
        <p>{{ $post->body }} <em>- {{ $post->user->name}}</em> <small>({{ $post->updated_at }})</small></p>
      </a>
    @endforeach
  </div>
@endsection
