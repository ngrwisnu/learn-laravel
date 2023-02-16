@extends('dashboard.layouts.main')

@section('container')
<article class="container my-3">
    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" style="width: 100%" class="mb-3" alt="{{ $post->category->name }}">
    <div class="row">
        <div class="col-8 mx-auto">
            <h2>{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>
            <a href="/dashboard/posts" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="/dashboard/posts" class="btn btn-danger"><span data-feather="x"></span> Delete</a>
            <div class="body mt-3">
                {!! $post->body !!}
            </div>
        </div>
    </div>
</article>
@endsection