@extends('layouts/main')

@section('content')
    <h1>Post Categories</h1>
    <article>
        <ul>
            @foreach ($categories as $category)
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
            @endforeach
        </ul>
    </article>
@endsection