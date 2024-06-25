@extends('layouts.register')

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
  .btn-dark-blue:hover {
    background-color: #FAB417; /* Darker background on hover */
    border-color: #FAB417; /* Darker border color on hover */
  }
</style>
    <form class="form-signin" action="{{ route('login') }}" method="POST">
        @csrf

        <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>

        <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Email address" required="">

            @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required="">

            @error('password')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span> 
            @enderror
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block btn-dark-blue" type="submit">Sign in</button>

    
        <p class="mt-5 mb-3 text-muted">© USTP FREEDOM WALL {{ now()->year}}</p>
        <p>New to UFW? <a href="{{ route('register') }}">Create account</a></p>
    </form>
@endsection