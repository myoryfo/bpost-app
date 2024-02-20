@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-8">
                <h2 class="mb-2">{{ $post->tittle }}</h2>
                <div class="mb-3">
                    <a href="/dashboard/posts" class="btn btn-success"><span class="bi-arrow-left-circle"> Back to My
                            Post</span></a>
                    <a href="/dashboard/posts" class="btn btn-warning"><span class="bi-pencil-square"> Edit</span></a>
                    <a href="/dashboard/posts" class="btn btn-danger"><span class="bi-trash"> Delete</span></a>
                </div>
                <img class="img-fluid" src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}">
                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/dashboard/posts">Back To My Post</a>
            </div>
        </div>
    </div>
@endsection
