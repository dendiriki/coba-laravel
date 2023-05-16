@extends('layouts.main')

    {{-- @dd($posts) --}}

    @section('container')

    <h1 class="mb-5"> Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/1600x700/?computer,person,coding" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title bg-dark px-3 py-2"> <a href="/posts?category={{ $category->slug }}" class=" text-decoration-none text-white">{{ $category->name }}</a></h5>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

        {{-- @foreach ($categories as $category)
            <ul>
                <li>
                    <h2> <a href="/categories/{{ $category->slug }}"> {{ $category->name }}</a> </h2>
                </li>
            </ul>
        @endforeach --}}

    @endsection
