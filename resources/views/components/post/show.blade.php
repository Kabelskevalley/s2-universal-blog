<div class="container-fluid card my-2">
  <div class="card-body">
  <p class="card-text">{!! nl2br(e($slot)) !!}</p>
  <hr>
  <div class="row justify-content-end">
    <div class="col-auto">
      <a href="{{ action('PostController@show', ['id' => $post->id])}}">{{ __('post.view')}}</a>
    </div>
  </div>
  <div class="row">
      <span class="col-md-3 col-sm-12">
        <a href="{{ action('UserController@show', ['id' => $post->user->id])}}">{{ $post->user->name }}</a>
      </span>
      <span class="col text-info">{{ __('post.last_change')}} <i>{{ $post->updated_at }}</i></span>
    @if (Auth::id() == $post->user->id)
      <div class="col-auto">
        <form method="POST" action="{{ action('PostController@destroy', ['id' => $post->id]) }}">
          @method('DELETE')
          @csrf
          <div class="btn-group" role="group">
            <a href="{{ action('PostController@edit', ['id' => $post->id]) }}" class="btn btn-outline-success btn-space" aria-label="Post bearbeiten">bearbeiten</a>
            <button type="submit" class="btn btn-outline-danger btn-space" aria-label="Post löschen">löschen</button>
          </div>
        </form>
      </div>
    @endif
  </div>
</div>
</div>
