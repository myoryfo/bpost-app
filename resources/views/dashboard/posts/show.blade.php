@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-8">
                <h2 class="mb-2">{{ $post->tittle }}</h2>
                <div class="mb-3">
                    <a href="/dashboard/posts" class="btn btn-success"><span class="bi-arrow-left-circle"> Back to My
                            Post</span></a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span
                            class="bi-pencil-square"> Edit</span></a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                                class="bi-trash"></span> Delete</button>
                    </form>
                </div>
                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img class="img-fluid" src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}">
                @endif
                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/dashboard/posts">Back To My Post</a>
            </div>
        </div>
    </div>
@endsection
