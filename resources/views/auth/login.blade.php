@extends('layouts.template')

@section('judul')
    Login
@endsection

@section('ekstrajs')
    <script>
        function showPassword(e) {
            var input = document.getElementById('password')
            if (input.type === 'password') {
                input.type = "text"
                e.target.className = "fas fa-eye"
            } else {
                input.type = "password"
                e.target.className = "fas fa-eye-slash"
            }
        }
    </script>
@endsection

@section('main')
    <section>
        <div class="min-vh-100 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 mx-auto">
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if (Session::has('alert-' . $msg))
                                    <p class="alert aler-{{ $msg }}">
                                        {{ Session::get('alert-' . $msg) }} <a href="#" class="close"
                                            data-dismiss="alert" aria-label="close"> &times; </a>
                                    </p>
                                @endif
                            @endforeach
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="shadow-lg">
                            <div class="d-flex align-items-center">
                                <div class="d-none d-md-block d-lg-block">
                                    <img src="{{ asset('/tema/img/hero-img.png') }}" class="objectFit" />
                                </div>
                                <div class="p-4" id="formPanel">
                                    <div class="text-center mb-5">
                                        <h1 class="customHeading h3 text-uppercase">Login</h1>
                                    </div>
                                    <form method="post" action="{{ url('/login') }}">
                                        @csrf
                                        <div class="custom-form-group">
                                            <label class="text-uppercase" for="email">Email</label>
                                            <input type="email" name="email" id="email" class="pb-1" required />
                                            <span class="pb-1">
                                                <i class="fas fa-user" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="custom-form-group mt-3">
                                            <label class="text-uppercase" for="password">Password</label>
                                            <input type="password" name="password" id="password" class="pb-1" required />
                                            <span class="pb-1">
                                                <i id="showCursor" class="fas fa-eye-slash" aria-hidden="true"
                                                    onclick="showPassword(event)"></i>
                                            </span>
                                        </div>
                                        <div class="mt-5">
                                            <button type="submit" class="w-100 p-2 d-block custom-btn">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
