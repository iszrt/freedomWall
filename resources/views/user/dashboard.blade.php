@extends('layouts.app')

@section('body')
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

<div class="container py-4">
    <div class="row">

        <div class="col-12 mb-4">
            <h3 class="display-4">Hello, {{ auth()->user()->name }}</h3>
        </div>

        <div class="col-md-4">
            <div class="card mb-3 border-dark-blue" style="max-width: 18rem;">
                <div class="card-header border-dark-blue">Posts</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $posts }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3 border-dark-blue" style="max-width: 18rem;">
                <div class="card-header border-dark-blue">Categories</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $categories }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3 border-dark-blue" style="max-width: 18rem;">
                <div class="card-header border-dark-blue">Comments</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $comments }}</h5>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection
