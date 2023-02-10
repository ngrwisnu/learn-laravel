@extends('layouts.main')

@section('content')

    @if ($posts->count())

    <article class="mb-4">
        <div class="card">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
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

    @else

    <p class="text-center">No posts found!</p>

    @endif

    

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <article>
                        <div class="card mb-3 overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://source.unsplash.com/400x400?{{ $post->category->name }}" class="img-fluid" alt="..." style="height: 100%">
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
        
@endsection

