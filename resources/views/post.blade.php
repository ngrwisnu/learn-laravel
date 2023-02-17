@extends('layouts.main')

@section('content')
    <article class="container">
        @if ($post->image) 
        <div style="width: 100%; height: 400px; overflow: hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" style="width: 100%" class="mb-3" alt="{{ $post->category->name }}">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" style="width: 100%" class="mb-3" alt="{{ $post->category->name }}">
        @endif
        <div class="row">
            <div class="col-8 mx-auto">
                <h2>{{ $post->title }}</h2>
                <h6 style="color: #a3a3a3; font-size: 14px">Written by <a href="/author/{{ $post->user->username }}" class="text-decoration-underline text-dark">{{ $post->user->name }}</a></h6>
                <h6 style="color: #a3a3a3; font-size: 14px">category: <a href="/categories/{{ $post->category->slug }}" class="text-dark">{{ $post->category->name }}</a></h6>
                <div class="body mt-3">
                    {!! $post->body !!}
                </div>

                <a href="/blog"><< Back to Posts</a>
            </div>
        </div>
    </article>

@endsection