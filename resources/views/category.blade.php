@extends('layouts/main')

@section('content')
    <h1 class="mb-3">Category: {{ $title }}</h1>

    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <article class="col-md-4 mb-3">
                <div class="card" style="height: 430px">
                    <a href="/posts/{{ $post->slug }}" class="position-absolute" style="width: 100%; height: 100%; background-color: rgba(0,0,0,0)"></a>
                    <img src="https://source.unsplash.com/800x400?{{ $category->title }}" class="card-img-top" alt{{ $category->title }}">
                    <div class="card-body overflow-hidden">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <small>Written by: <strong style="font-size: 16px;">{{ $post->user->name }}</strong></small>
                      <small>{{ $post->created_at->diffForHumans() }}</small>
                      <p class="card-text mt-3" style="color: #a3a3a3;">{{ Str::substr($post->excerpt, 0, 180) }}</p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>

@endsection