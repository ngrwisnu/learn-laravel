{{-- @dd($posts) --}}

@extends('layouts.main')

@section('content')
    <h1>{{ $heading->name }}'s Posts</h1>
    @foreach ($posts as $post)
        <article>
            <div class="py-5 border-bottom">
                <h2>{{ $post->title }}</h2>
                <h6><span class="fw-normal">Category</span>: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                <p>{{ Str::substr($post->excerpt, 0, 50).' ...' }} <a href="/posts/{{ $post->slug }}">read more</a></p>
            </div>
    </article>
    @endforeach
@endsection