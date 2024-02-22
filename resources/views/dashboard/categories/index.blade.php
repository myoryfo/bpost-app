@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="/dashboard/categories/create" class="btn btn-light mb-3 text-light">Create New Categories</a>
    <div class="table-responsive small border border-dark rounded p-1 col-lg-6">
        <table class="table table-striped table-sm ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span
                                    class="bi-pencil"></span></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        class="bi-trash"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
