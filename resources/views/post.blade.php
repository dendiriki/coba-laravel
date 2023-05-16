@extends('layouts.main')


@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }} / </a> <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1600x700/?computer,person,coding" alt="" class="card-img-top mb-5">

                <article>
                {!! $post->body !!}
                </article>
                <br><br>
                <a href="/posts" class="btn btn-primary">kembali ke halaman posts</a>

        </div>

    </div>
</div>

<article>

</article>

@endsection
