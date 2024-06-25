<!-- Blog Post -->
<style>
  .bg-dark-blue {
    background-color: #16163F; /* Example dark blue color */
  }
  .border-dark-blue {
    border-color: #16163F;
  }
  .text-dark-blue {
    color: #16163F;
  }
  .badge-dark-blue {
    background-color: #16163F; /* Dark blue color */
    color: white; /* White text for contrast */
  }
</style>
<div class="card mb-4">
    <div class="card-body">
        <p>
            <a href="{{ $post->category->path() }}">
                <span class="badge badge-pill badge-dark-blue">{{ $post->category->name }}</span>
            </a>
        </p>
        <h2 class="card-title">
            <a class= "text-dark-blue" href="{{ $post->path() }}">
                {{ $post->title }}
            </a>
        </h2>
        <p class="card-text">{{ substr($post->body, 0, 200) }}</p>

        <a href="{{ $post->path() }}" class="btn btn-warning">
            Read More &rarr;
        </a>
    </div>
    <div class="card-footer text-muted">
        Posted on {{ $post->created_at->toDayDateTimeString() }} by <a class="text-dark-blue" href="#">{{ $post->user->name }}</a>
        <span class="badge badge-pill badge-dark-blue float-right">Comments {{ $post->comments_count }}</span>
    </div>
</div>
