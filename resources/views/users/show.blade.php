@extends('layouts.app')

@section('title', $user->name)

@section('content')

  <div class="container-fluid">
    <h1>{{ $user->name . (Auth::id() == $user->id ? sprintf(' (%s)', __('user.you')) : '')}}</h1>
    <hr>
    <div class="row">
    <div class="col-md-6 col-sm-12">
      <h4>{{ __('user.infos')}}</h4>
      @if ($posts->isEmpty())
        <p>
          {{ __('user.no_posts')}}
        </p>
      @else
        <p>
          {{ __('user.last_active')}} <i>{{ $posts[0]->updated_at }}</i>
        </p>
      @endif
    </div>

      <div class="col-md-6 col-sm-12">
        <h4>{{ __('user.posts')}}</h4>
        @foreach ($posts as $post)
          @component('components.post.show')
            @slot('post', $post)
              {{ $post->body }}
          @endcomponent
        @endforeach
      </div>
    </div>
  </div>

@endsection
