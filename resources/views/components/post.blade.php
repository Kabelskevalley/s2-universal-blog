<div class="container-fluid alert alert-secondary">
  <h4 class="alert-heading">Nachricht</h4>
  <p>{{ $slot }}</p>
  <hr>
  <div class="row">
    <div class="col">
      <span class="mb-0">{{ $post->user->name }} <i>{{ $post->updated_at }}</i></span>
    </div>
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
