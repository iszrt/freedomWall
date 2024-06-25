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
  .btn-dark-blue {
    background-color: #16163F; /* Dark blue background */
    border-color: #16163F; /* Dark blue border color */
    color: white; /* White text */
  }
</style>

<div class="container py-4">
    <div class="row">

        @include('partials.back-link')

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Create Category
                </div>

                <div class="card-body">
                <form action="{{ route('user.categories.store') }}" method="POST">
                    @csrf


                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" required class="form-control">

                            @error('name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div>

                        <button class="btn btn-dark-blue" type="submit">Create</button>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection
