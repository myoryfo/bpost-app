@extends('layouts.main')

@section('container')
    <div class="mt-5 text-center">
        <h3 class="mt-10">{{ $name }} S.Tr.T</h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" class="object-fit-scale img-thumbnail rounded-circle"
            style="width: 200px; height: 200px;"" />
    </div>
@endsection
