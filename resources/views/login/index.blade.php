@extends('layouts.main')


@section('container')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-4">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
            </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                </div>
            @endif
    </div>
</div>


</div>


<main class="form-signin w-100 m-auto">
    <form action="/login" method="POST">
        @csrf
      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required>
        <label for="email">Email address</label>
        @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>

      <div class="checkbox mb-3">
      </div>
      <button class="w-100 btn btn-lg btn-primary mb-4" type="submit">Login</button>
    </form>
    <small>Not Register? <a class="text-decoration-none mt-5" href="/register">Register Now </a></small>
  </main>




@endsection
