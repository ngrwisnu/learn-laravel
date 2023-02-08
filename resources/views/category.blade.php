@extends('layouts/main')

@section('content')
    <h1>Category {{ $category }}</h1>
    <article>
        @foreach ($posts as $post)
            <div class="">
                <h2>{{ $post->title }}</h2>
                <h6>{{ $post->author }}</h6>
                <p>{!! $post->body !!}</p>
            </div>
        @endforeach
    </article>
@endsection