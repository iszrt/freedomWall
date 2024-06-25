<!-- Search Widget -->
<!-- Custom CSS for Dark Blue Background -->
<style>
  .bg-dark-blue {
    background-color: #16163F; /* Example dark blue color */
  }
  .border-dark-blue {
    border-color: #16163F;
  }
  .btn-dark-blue {
    background-color: #16163F;
  }
</style>
<div class="card my-4">
    <h5 class="card-header bg-dark-blue text-white">Search</h5>
    <div class="card-body">
        <form action="{{ url('/search') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder="Search for..." required>
                <span class="input-group-btn">
                    <button class="btn btn-dark-blue text-white" type="submit">Go!</button>
                </span>
            </div>
        </form>
    </div>
</div>