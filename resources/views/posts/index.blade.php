@extends('layouts.default')

@section('title', 'Home page')


@section('content')

    <div class="container my-5">
        <h1 class="text-center mb-4">Posts</h1>

        @forelse($posts as $post)
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <p class="card-text text-muted">Creator: {{ $post->user->name }}</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-info text-center" role="alert">
                No posts found...
            </div>
        @endforelse
    </div>

@endsection
