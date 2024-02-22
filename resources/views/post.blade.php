{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-2">{{ $post->tittle }}</h2>
                <p><a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <div style="max-height: 200px; overflow: hidden;">
                        <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img class="img-fluid" src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}">
                @endif

                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/posts">Back To Blog</a>
            </div>
        </div>
    </div>
@endsection
