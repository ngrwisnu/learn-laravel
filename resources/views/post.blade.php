@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <h6> By <strong>Ngr</strong></h6>
        <p>category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection