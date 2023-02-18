@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-6">
    <form action="/dashboard/posts" method="POST" class="mb-5" autocomplete="on" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input name="title" type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title" autofocus>
          @error('title')
            <small class="invalid-feedback">{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input name="slug" type="text" value="{{ old('slug') }}" class="form-control @error('slug') is-invalid @enderror" id="slug">
          @error('slug')
            <small class="invalid-feedback">{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id" id="category">
            @foreach ($categories as $category)
              @if (old('category_id') == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Choose Image</label>
          <img class="img-preview img-fluid mb-3 col-sm-3">
          <input class="form-control @error('slug') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
            <small class="invalid-feedback">{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="editor" class="form-label">Post Content</label>
          <textarea name="body" id="editor" cols="30" rows="10" class="@error('body') is-invalid @enderror">{{ old('body') }}</textarea>
          @error('body')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary"><span data-feather="plus"></span> Create Post</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    function previewImage() {
      const image = document.querySelector('#image');
      const imagePreview = document.querySelector('.img-preview');

      imagePreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imagePreview.src = oFREvent.target.result;
      }
    }
</script>
@endsection