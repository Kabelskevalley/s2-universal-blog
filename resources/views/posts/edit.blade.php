@extends('layouts.app')

@section('title', 'Post Bearbeiten')

@section('content')
  <div class="container-fluid">
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
    <form method="POST" action="{{ action('PostController@update', ['id' => $post->id]) }}">
      @method('PATCH')
      @csrf
      <div class="row align-items-end">
        <div class="form-group col-md col-sm-12">
          <textarea class="form-control" name="body" placeholder="{{ __('post.new_hint')}}" aria-label="{{ __('post.new')}}" required>{{ $post->body }}</textarea>
        </div>
        <div class="form-group col-auto">
          <button class="btn btn-primary float-right" type="submit">{{ __('post.save_changes')}}</button>
        </div>

      </div>
      @include('layouts.errors')
    </form>

    <div class="row">
      <div class="col-md-6 col-sm-12 text-info">
        {{ __('post.created_at')}} <i>{{ $post->created_at }}</i>
      </div>
      <div class="col-md-6 col-sm-12 text-info">
        {{ __('post.last_change')}} <i>{{ $post->updated_at }}</i>
      </div>
    </div>

  </div>
@endsection
