@extends('layouts.main')

@section('content')
    <article>
        @foreach ($posts as $post)
            <div class="py-5 border-bottom">
                <h2>{{ $post->title }}</h2>
                <h6><span class="fw-normal">Author</span>: <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a>, <span class="fw-normal">Category</span>: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                <p>{{ Str::substr($post->excerpt, 0, 50).' ...' }} <a href="/posts/{{ $post->slug }}">read more</a></p>
            </div>
        @endforeach
    </article>
@endsection

