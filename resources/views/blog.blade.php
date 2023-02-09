@extends('layouts.main')

@section('content')
    <article>
        @foreach ($posts as $post)
            <div class="">
                <h2>{{ $post->title }}</h2>
                <h6><span class="fw-normal">Author</span>: {{ $post->user->name }}, <span class="fw-normal">Category</span>: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                <p>{{ Str::substr($post->excerpt, 0, 50).' ...' }} <a href="/posts/{{ $post->slug }}">read more</a></p>
            </div>
        @endforeach
    </article>
@endsection

