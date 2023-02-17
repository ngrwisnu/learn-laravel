{{-- @dd($posts) --}}

@extends('layouts.main')

@section('content')
    <h1 class="mb-3">{{ $user->name }}'s Posts</h1>
    
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <article class="col-md-4 mb-3">
                <div class="card overflow-hidden" style="height: 430px">
                    <a href="/posts/{{ $post->slug }}" class="position-absolute" style="width: 100%; height: 100%; background-color: rgba(0,0,0,0)"></a>
                    @if ($post->image) 
                    <img src="{{ asset('storage/' . $post->image) }}" style="width: 100%" class="card-img-top" alt="{{ $post->category->name }}">
                    @else
                    <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" class="card-img-top" alt{{ $post->category->name }}">
                    @endif
                    <div class="card-body overflow-hidden">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <small>posted {{ $post->created_at->diffForHumans() }}</small><br/>
                      <small>category:  <strong>{{ $post->category->name }}</strong></small>
                      <p class="card-text mt-3" style="color: #a3a3a3;">{{ Str::substr($post->excerpt, 0, 180) }}</p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>

@endsection