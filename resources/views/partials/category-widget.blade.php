<!-- Categories Widget -->
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
</style>
<div class="card my-4 warning">
    <h5 class="card-header bg-warning text-white" style="font-weight: bold;">Categories</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    @foreach ($categories as $category)
                        <li>
                            <a class= "text-dark-blue" href="{{ $category->path() }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
</div>