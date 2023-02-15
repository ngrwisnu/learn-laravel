@extends('layouts.main')

@section('content')
    
    <div class="row justify-content-center">
        <div class="col-lg-4">

            {{-- ! Flash alert --}}
            @if (session()->has('success'))
            <div class="alert alert-success d-flex justify-content-between" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger d-flex justify-content-between" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Don't have an account? <a href="/register">Register here!</a></small>
            </main>
        </div>
    </div>
    

@endsection