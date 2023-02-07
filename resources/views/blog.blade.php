@extends('layouts.main')

@section('content')
    <article>
        @foreach ($posts as $post)
            <div class="">
                <h2>{{ $post['title'] }}</h2>
                <h6>{{ $post['author'] }}</h6>
                <p>{{ Str::substr($post['body'], 0, 50).' ...' }} <a href="/posts/{{ $post["slug"] }}">read more</a></p>
            </div>
        @endforeach
    </article>
@endsection

