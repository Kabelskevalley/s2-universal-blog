@extends('layouts.app')

@section('title', explode("\n", $post->body)[0])

@section('content')

  @component('components.post.show')
    @slot('post', $post)
      {{ $post->body }}
  @endcomponent

@endsection
