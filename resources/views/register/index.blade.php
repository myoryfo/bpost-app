@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-3">
        <div class="col-md-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror"
                            id="name" name="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="floatingInput">Name</label>
                        @error('name')
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="username"
                            name="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="example@email.com" required value="{{ old('email') }}">
                        <label for="floatingInput">Email</label>
                        @error('email')
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Password">
                        <label for="floatingInput">Password</label>
                        @error('password')
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
                    <small class="d-block text-center mt-3">Already Registed? <a href="/login">Login</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
