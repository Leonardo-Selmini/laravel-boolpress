@extends('layouts.app')

@section('content')
<div class="col">
  <div class="card">
    <div class="card-header">
      <h5 class="d-inline">{{$post->title}}</h5>
      @if($post->posted == 0)
      <span class="badge badge-dark">Draft</span>
      @else
      <span class="badge badge-info">Posted</span>
      @endif
      <h6 class="card-subtitle text-muted mt-2">slug: {{$post->slug}}</h6>
    </div>

    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div>
          @if(isset($post->category))
          <h5>Category: {{$post->category->name}}</h5>
          @endif
          @if(isset($post->tags))
            @foreach ($post->tags as $tag)
              <span class="badge badge-secondary">{{$tag->name}}</span>
            @endforeach
          @endif
          <p class="card-text">{{$post->content}}</p>
        </div>
        @if(isset($post->image))
          <img src="{{asset("storage/{$post->image}")}}" alt="{{$post->name}} Photo" style="width: 100px;">
        @endif
      </div>
      <a href="{{route("posts.edit", $post->id)}}" class="d-inline">
        <button class="btn btn-link">Edit</button>
      </a>
      <form action="{{route("posts.destroy", $post->id)}}" method="POST" class="d-inline">
        @csrf
        @method("DELETE")
        <button type="sumbit" class="btn btn-link">Delete</button>
      </form>
    </div>
  </div>
</div>
@endsection