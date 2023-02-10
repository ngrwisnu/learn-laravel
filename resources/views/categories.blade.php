@extends('layouts/main')

@section('content')

    <h1 class="mb-3">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-3">
                <div class="card mb-3 border border-0">
                    <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-dark">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://source.unsplash.com/80x80?{{ $category->name }}" class="img-fluid rounded-circle" alt="{{ $category->name }}">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $category->name }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection