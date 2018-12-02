@extends('layouts.app')

@section('title', str_limit($post->body, $limit=20, $end='...'))

@section('content')

  @component('components.post.show')
    @slot('post', $post)
      {{ $post->body }}
  @endcomponent

@endsection
