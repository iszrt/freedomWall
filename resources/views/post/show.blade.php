@extends('layouts.app')

@section('body')
    <!-- Custom CSS for Dark Blue Background -->
    <style>
        .bg-dark-blue {
            background-color: #16163F; /* Example dark blue color */
        }
        .badge-dark-blue {
            background-color: #16163F; /* Dark blue color */
            color: white; /* White text for contrast */
        }
        .preserve-space {
            white-space: pre-wrap; /* Preserves spaces and respects line breaks */
        }
    </style>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{ $post->title }}</h1>

                <!-- Category -->
                <p>
                    <a href="{{ $post->category->path() }}">
                        <span class="badge badge-pill badge-dark-blue text-warning">{{ $post->category->name }}</span>
                    </a>
                </p>

                <!-- Author -->
                <p class="lead">
                    by
                    <a class="text-dark" href="#">{{ $post->user->name }}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on {{ $post->created_at->toDayDateTimeString() }}</p>

                <hr>

                <!-- Post Content -->
                <p style="text-align: justify;" class="lead preserve-space">{{ $post->body }}</p>

                <hr>

                <!-- Comments Form -->
                @auth
                    @include('partials.comment-form')
                @endauth

                <h3>Comments</h3>

                <hr>

                @if($post->comments->isNotEmpty()) 

                    @foreach ($post->comments as $comment)

                        @include('partials.comment')

                    @endforeach

                @endif

            </div>

            @include('includes.sidebar')

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
