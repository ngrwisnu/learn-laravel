@extends('layouts.main')

@section('content')
    <h1 class="text-center">All Posts</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter the keywords" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit" style="background-color: #5b21b6; color: white;">Search Posts</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())

    <article class="mb-4">
        <div class="card">
            @if ($posts[0]->image) 
            <div style="width: 100%; height: 400px; overflow: hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" style="width: 100%" class="card-img-top mb-3" alt="{{ $posts[0]->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p class="card-text">
                    <small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </article>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <article>
                        <div class="card mb-3 overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    @if ($post->image) 
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" style="height: 100%" alt="{{ $post->category->name }}">
                                    @else
                                    <img src="https://source.unsplash.com/400x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}" style="height: 100%">
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark fs-5">{{ Str::substr($post->title, 0, 40) }}</a>
                                        </h5>
                                        <p class="card-text">{{ Str::substr($post->excerpt, 0, 50).' ...' }} <span class="text-decoration-underline text-primary">read more</span></p>
                                        <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                                    </div>
                                </div>
                            </div>
                            <a href="/categories/{{ $post->category->slug }}" class="position-absolute bottom-0 end-0 text-decoration-none text-white py-1 px-2" style="background-color: rgba(0, 0,0, 0.7); font-size: 12px">{{ $post->category->name }}</a>
                        </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>

    @else

    <p class="text-center">No posts found!</p>

    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}

    </div>
        
@endsection

