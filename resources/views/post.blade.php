@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h6>{{ $post['author'] }}</h6>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog">Back to Posts</a>
@endsection