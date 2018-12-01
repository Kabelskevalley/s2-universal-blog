@extends('layouts.app')

@section('title', 'Post Bearbeiten')

@section('content')
  <div class="container-fluid">

    <form method="POST" action="{{ action('PostController@update', ['id' => $post->id]) }}">
      @method('PATCH')
      @csrf
      <div class="row align-items-end">
        <div class="form-group col-md col-sm-12">
          <textarea class="form-control" name="body" placeholder="News am GCG" aria-label="neuer Post" required>{{ $post->body }}</textarea>
        </div>
        <div class="form-group col-auto">
          <button class="btn btn-primary float-right" type="submit">Änderung speichern</button>
        </div>

      </div>
      @include('layouts.errors')
    </form>

    <div class="row">
      <div class="col-md-6 col-sm-12 text-info">
        Erstellt am: <i>{{ $post->created_at }}</i>
      </div>
      <div class="col-md-6 col-sm-12 text-info">
        Letzte Änderung am: <i>{{ $post->updated_at }}</i>
      </div>
    </div>

  </div>
@endsection
