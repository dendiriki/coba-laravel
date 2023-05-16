@extends('dashboard.layouts.main')


@section('content')
    <div class="container">
        <div class="row my-3 ">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard" class="btn btn-success"><span data-feather="arrow-left"></span>Back to All Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span
                        data-feather="edit"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('yakin mau hapus')"> <span
                            data-feather="x-circle"></span> Hapus </button>
                </form>
                <img src="https://source.unsplash.com/1600x700/?computer,person,coding" alt=""
                    class="card-img-top mb-5 mt-3">

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
