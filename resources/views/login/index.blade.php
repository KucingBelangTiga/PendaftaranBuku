@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="post" action="/login">
                @csrf
                <div class="form-floating">
                <input type="email" class="form-control @error('email') @enderror is-invalid" id="email" placeholder="name@example.com" name="email" required value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                </div>


                <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-2">Not Registered? <a href="/register">Register Now</a></small>
        </main>
    </div>
</div>



@endsection