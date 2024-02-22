@extends('layouts.main')

@section('container')
    <h1 class="my-3 mb-5 text-center">{{ $tittle }}</h1>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4 mb-3 d-flex align-items-center justify-content-center">
                <div class="card" style="height: 300px; width: 300px;">

                    <a href="/posts?category={{ $category->slug }}" class="text-decoration-none"
                        style="width: 100%; height: 100%;">
                        <div class="position-relative" style="width: 100%; height: 100%;">
                            <img src="https://source.unsplash.com/random/300x300?{{ $category->name }}" class="card-img-top"
                                alt="...">
                            <p class="text-center text-light position-absolute top-50"
                                style="width: 100%; background-color: black; opacity: 0.8;">
                                {{ $category->name }}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
