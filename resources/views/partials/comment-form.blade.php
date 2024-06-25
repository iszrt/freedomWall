<!-- Custom CSS for Dark Blue Background -->
<style>
  .bg-dark-blue {
    background-color: #16163F; /* Example dark blue color */
  }
</style>


<div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
        <form action="{{ route('post.comment', $post) }}" method="POST">
            @csrf

            <div class="form-group">
                <textarea class="form-control" name="body" rows="3"></textarea>
            </div>

            <button type="submit" class="text-warning bg-dark-blue ">Reply</button>
        </form>
    </div>
</div>