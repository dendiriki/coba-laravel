@extends('layouts.main')

    {{-- @dd($posts) --}}

    @section('container')

    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="/posts" method="GET">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="search" name="search">
            <button class="btn btn-primary" type="submit">search</button>
          </div>
        </form>
      </div>
    </div>

    @if($posts->count() > 0)
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1600x700/?computer,person,coding" class="card-img-top" alt="...">
        <div class="card-body ">
          <h3 class="card-title">{{ $posts[0]->title }}</h3>
          <p>By. <a href="/posts?author={{$posts[0]->author->username}}" class="text-decoration-none">{{ $posts[0]->author->username }} in </a><a href="/posts?category={{ $posts[0]->category->slug }}" class =" text-decoration-none">{{ $posts[0]->category->name }}</a></p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
          <a href="/posts/{{ $posts[0]->slug }}" class =" text-decoration-none btn btn-primary" > Read More</a>
        </div>
      </div>


    <div class="container">
        <div class="row">
                @foreach($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="position-absolute bg-dark px-3 py-2 "> <a href="/posts?category={{ $post->category->slug }}" class =" text-decoration-none text-white">{{ $post->category->name }}</a> </div>
                    <img src="https://source.unsplash.com/1600x700/?computer,person,coding" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>By. <a href="/posts?author={{$post->author->username}}" class="text-decoration-none">{{ $post->author->username }} </a>
                      <p class="card-text">{{ $post->excerpt }}.</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
             @endforeach;
        </div>
    </div>

{{--
        @foreach ($posts->skip(1) as $post)
        <article class="mb-5 border-bottom pb-4">
        <h2>
           <a href="/posts/{{ $post->slug }}" class =" text-decoration-none">{{ $post->title }}</ > {{ $post->title }}</a>
        </h2>
        <p>By. <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->username }} / </a><a href="/categories/{{ $post->category->slug }}" class =" text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{!! $post->excerpt !!}</p>

        <a href="/posts/{{ $post->slug }}" class =" text-decoration-none" > Read More</a>

        </article>
        @endforeach --}}

        @else
      <h2 class="text-center">No Post Found</h2>
        @endif
        <div class="d-flex justify-content-end">
             {{$posts->links()}}
        </div>

    @endsection
