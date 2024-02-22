@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
    <div class="col-lg-8">
        {{-- enctype function as upload file handler --}}
        <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="m-2">
                <label for="tittle">Title</label>
                <input type="text" class="form-control @error('tittle') is-invalid @enderror" id="tittle" name="tittle"
                    value="{{ old('tittle') }}">
                @error('tittle')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="m-2">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="m-2">
                <label for="category_id">Select Category</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id' == $category->id))
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image Upload</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <img class="img-preview img-fluid mt-3 col-sm-4" id="img-preview">

            </div>
            <div class="m-2">
                <label for="body">Your Post</label>
                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input id="body" type="hidden" name="body" class="bg-light" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>

            <button type="submit" class="btn btn-light m-2 text-light">Create Post</button>
        </form>
    </div>

    <script>
        const tittle = document.querySelector('#tittle');
        const slug = document.querySelector('#slug');

        tittle.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?tittle=' + tittle.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        const img = document.querySelector('#image');
        const imgPreview = document.querySelector('#img-preview');


        // Better Preview Image Function
        img.onchange = evt => {
            const [file] = img.files
            if (file) {
                imgPreview.src = URL.createObjectURL(file)
            }
            console.log(imgPreview.src);
        }

        // Preview Image Function
        // function previewImage() {
        //     const img = document.querySelector('#image');
        //     const imgPreview = document.querySelector('#img-preview');

        //     imgPreview.style.display = 'block';

        //     const reader = new FileReader();
        //     reader.readAsDataURL(image.files[0]);

        //     reader.onload = function(e) {
        //         imgPreview.src = e.target.result;
        //     }
        // }
    </script>
@endsection
