<form method="POST" action="{{ url('createcomment') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea name="body" class="form-control" cols="30" rows="10" required></textarea>
        <input type="hidden" name="post_id" value="{{ $post->id }}">
      </div>

      <button type="submit" class="btn btn-primary">Create COMMENT</button>
  </form>
  <br>
  @include('components.errors')
  @include('components.status')