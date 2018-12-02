@extends('layouts.app')

@section('title', $user->name)

@section('content')

  <div class="container-fluid">
    <h1>{{ $user->name . (Auth::id() == $user->id ? ' (Du)' : '')}}</h1>
    <hr>
    <div class="row">
      <div class="col-6">
        <h4>Posts</h4>
        @foreach ($posts as $post)
          @component('components.post.show')
            @slot('post', $post)
              {{ $post->body }}
          @endcomponent
        @endforeach
      </div>
      <div class="col-6">
        <h4>Infos</h4>
        @if ($posts->isEmpty())
          <p>
            Noch keine Posts.
          </p>
        @else
          <p>
            Zuletzt aktiv am <i>{{ $posts[0]->updated_at }}</i>
          </p>
        @endif
      </div>
    </div>
  </div>

@endsection
