{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-2">{{ $post->tittle }}</h2>
                <p><a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img class="img-fluid" src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}">
                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/blog">Back To Blog</a>
            </div>
        </div>
    </div>
@endsection
