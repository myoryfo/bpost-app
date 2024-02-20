{{-- @dd($posts->author) --}}

@extends('layouts.main')

@section('container')

    @if ($posts->count())
        <h1 class="mb-3 text-center">{{ $tittle }}</h1>

        <div class="row mb-3 justify-content-center">
            <div class="col-md-6">
                <form action="/posts">

                    @if (request('category'))
                        <input type="hidden" name='category' value="{{ request('category') }}">
                    @endif

                    @if (request('author'))
                        <input type="hidden" name='author' value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search. ." name="search">
                        <button class="btn btn-info" type="submit">Seach</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-3">
            <img src="https://source.unsplash.com/random/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="image not avaible">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->tittle }}</h3>
                <small class="text-muted">
                    <p>by <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                        in
                        <a href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        Last update {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-info text-light">Read More</a>

            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-light">{{ $post->category->name }}</a></div>
                            <img src="https://source.unsplash.com/random/500x400?{{ $post->category->name }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <h5><a href="/posts/{{ $post->slug }}"
                                        class="text-decoration-none text-dark">{{ $post->tittle }}</a>
                                </h5>
                                <small class="text-muted">
                                    <p>by <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        Last update {{ $post->created_at->diffForHumans() }}
                                    </p>
                                </small>
                                <p class="card-text">{{ $post->excerpt }}</p>

                                <a href="/posts/{{ $post->slug }}"
                                    class="text-decoration-none btn btn-info text-light">Read More</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <h1 class="mb-3 text-center">{{ $tittle }}</h1>

        <div class="row mb-3 justify-content-center">
            <div class="col-md-6">
                <form action="/posts">

                    @if (request('category'))
                        <input type="hidden" name='category' value="{{ request('category') }}">
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search. ." name="search">
                        <button class="btn btn-info" type="submit">Seach</button>
                    </div>
                </form>
            </div>
        </div>
        <p class='text-center fs-4'>Post Not Found</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}

    </div>

@endsection
