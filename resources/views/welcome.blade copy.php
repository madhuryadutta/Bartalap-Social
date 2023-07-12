@extends('common.main')
@push('title')
<title></title>
@endpush
@push('jsfile')
<script src="{{ asset('assets/js/welcome.1js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/welcome_demo.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/welcome_style.css') }}">
<!-- Bootstrap CSS -->
<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'> -->
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
@endpush
@section('main-section')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- <div class="bg-white dark:bg-gray-900 ">
    <div class="flex justify-center h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url('{{asset("assets/images/image.png")}}')">
            <div class="flex items-center h-full px-12 bg-gray-900 bg-opacity-40">
                <div>
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">Bartalap</h2>

                  
                    <p class="max-w-xl mt-3 text-gray-300">
                    </p>
                </div>
            </div>
        </div>

        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
            <div class="flex-1">
                <div class="text-center">
                    <div class="flex justify-center mx-auto">
                        <img class="w-auto h-7 sm:h-8" src="https://d33wubrfki0l68.cloudfront.net/36a6a33f0830a46e5484b35712e21bc1073df14e/3b856/image/logo.png" alt="">
                    </div>

                    <p class="mt-3 text-gray-500 dark:text-gray-300">Sign in to access your account</p>
                </div>

                <div class="mt-8">
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email" :value="__('Email')" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email Address</label>
                            <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="example@example.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" :value="__('Password')" class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a>
                            </div>
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required autofocus autocomplete="current-password" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                Sign in
                            </button>
                        </div>

                    </form>

                    <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="#" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

@if (Route::has('login'))
<!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
    @endauth
</div> -->
@endif

<div class="container">
    <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
        Login
    </button>
</div>



<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-title text-center">
                    <h4>Login</h4>
                </div>
                <div class="d-flex flex-column text-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" require autofocus id="email" placeholder="Your email address..." :value="old('email')" autocomplete="username">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control @error('password')" is-invalid @enderror required autocomplete="current-password" class="form-control" id="password" placeholder="Your password...">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember_me" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember_me">
                                {{ __('Remember Me') }}
                            </label>

                        </div>
                        <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                    </form>

                    <!-- <div class="text-center text-muted delimiter">or use a social network</div>
                    <div class="d-flex justify-content-center social-buttons">
                        <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <i class="fab fa-linkedin"></i>
                        </button>
                        </di>
                    </div> -->
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
            </div>
        </div>
    </div>
</div>

@endsection