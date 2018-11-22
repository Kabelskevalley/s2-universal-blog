@extends('layout')

@section('title', 'News')

@section('content')

  <h1 class="title">News</h1>

  <div>
    @foreach ($posts as $post)
      <p>{{ $post->body }} <em>- {{ $post->user->name}}</em> <small>({{ $post->updated_at }})</small></p>
    @endforeach
  </div>
@endsection
