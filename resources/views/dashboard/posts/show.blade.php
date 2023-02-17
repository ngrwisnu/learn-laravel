@extends('dashboard.layouts.main')

@section('container')
<article class="container my-3">
    @if ($post->image) 
    <div style="width: 1200px; height: 400px; overflow: hidden;">
        <img src="{{ asset('storage/' . $post->image) }}" style="width: 100%" class="mb-3" alt="{{ $post->category->name }}">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" style="width: 100%" class="mb-3" alt="{{ $post->category->name }}">
    @endif
    <div class="row">
        <div class="col-8 mx-auto">
            <h2>{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Delete the post?')"><span data-feather="x"></span> Delete</button>
            </form>
            <div class="body mt-3">
                {!! $post->body !!}
            </div>
        </div>
    </div>
</article>
@endsection