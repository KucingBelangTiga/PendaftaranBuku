@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal mt-3" style="text-align: center ;">Registration Form</h1>

            <form method="post" action="/register">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" required value="{{old('email')}}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- <div class="form-floating">
                    <input type="name" class="form-control " id="floatingInput" placeholder="name" name="name">
                    <label for="floatingInput">Name</label>
                </div> -->
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-2">Already Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>



@endsection