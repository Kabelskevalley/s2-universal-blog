@extends('layout')

@section('title', 'News')

@section('content')

  <h1 class="title">News</h1>

  <div>
    @foreach ($posts as $post)
      <p>{{ $post->body }} - {{ $post->user->name}} ({{ $post->updated_at }})</p>
    @endforeach
  </div>
@endsection
