@extends('layouts.app')

@section('content')

  @if (Auth::check())
    <div class="container-fluid">
      <form method="POST" action="{{ action('PostController@store') }}">
        @csrf
        <div class="row align-items-end">
          <div class="form-group col-md col-sm-12">
            <textarea class="form-control" name="body" placeholder="News am GCG" aria-label="neuer Post" required>{{ old('body') }}</textarea>
          </div>
          <div class="form-group col-auto">
            <button class="btn btn-primary float-right" type="submit">Post erstellen</button>
          </div>

        </div>
        @include('layouts.errors')
      </form>
    </div>
  @endif
  @foreach ($posts as $post)
    @component('components.post.show')
      @slot('post', $post)
        {{ $post->body }}
    @endcomponent
  @endforeach

  @endsection
