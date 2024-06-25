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
  .btn-outline-dark-blue {
    border-color: #16163F; 
  }
  .btn-dark-blue:hover {
    background-color: #FAB417; /
    border-color: #FAB417; 
  }
</style>

<div class="jumbotron">
    <h1 class="display-4">Sorry, No Posts!</h1>
    <p class="lead">We couldn't find the post you're looking for.</p>
    <hr class="my-4">
    <p class="lead">
        <a class="btn btn-dark-blue text-white" href="{{ route('user.posts.create') }}" role="button">
            Click here to start adding posts.
        </a>
    </p>
</div>
