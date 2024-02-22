@extends('layouts.main')

@section('container')
    <div class="text-center" style="width: 100%">

        <h1 class="mb-5 text-center">{{ $category }}</h1>
        @foreach ($posts as $post)
            <article class="mb-5">
                <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->tittle }}</a></h2>
                <h5>{{ $post->author->name }}</h5>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
@endsection
