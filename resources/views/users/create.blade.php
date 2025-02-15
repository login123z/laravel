@extends('layouts.default')

@section('title', 'register page')


@section('content')

    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Register</h2>

                                <form action="{{ route('register.store') }}" method="post">
                                    @csrf

                                    <div class="mb-4">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Name">
                                    </div>

                                    <div class="mb-4">
                                        <label for="email" class="form-label">Your Email</label>
                                        <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email">
                                    </div>

                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Send</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{ route('login') }}" class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

