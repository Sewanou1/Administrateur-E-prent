@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                @extends('layouts.app')
                @section('cssLink')
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
                    <!-- Font Awesome -->
                    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
                    <!-- icheck bootstrap -->
                    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
                    <!-- Theme style -->
                    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
                @endsection
                @section('jsLink')
                    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
                    <!-- Bootstrap 4 -->
                    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                    <!-- AdminLTE App -->
                    <script src="{{ asset('') }}"></script>
                @endsection
                @section('content')
                    <div class="login-box">

                        <div class="card card-outline card-primary">
                            <div class="card-header text-center">
                                <a href="../../index2.html" class="h1"><b>{{ __('Login') }}</b></a>
                            </div>
                            <div class="card-body">
                                <p class="login-box-msg">Connectez-vous pour démarrer une nouvelle session</p>

                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Les informations sont incorrectes</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" placeholder="Mot de passe"
                                            class="form-control @error('password') is-invalid @enderror" name="password" required
                                            autocomplete="current-password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="icheck-primary">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    Se souvenir de moi
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-5">
                                            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>

                                {{-- <div class="social-auth-links text-center mt-2 mb-3">
                                    <a href="#" class="btn btn-block btn-primary">
                                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                                    </a>
                                    <a href="#" class="btn btn-block btn-danger">
                                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                                    </a>
                                </div> --}}
                                <!-- /.social-auth-links -->

                                <p class="mb-0 mt-2 d-flex justify-content-between ">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link mr-0 pl-0 ml-auto" href="{{ route('password.request') }}">
                                            Mot de passe oublié ?
                                        </a>
                                        {{-- <a class="btn btn-link mr-0 pr-0 ml-auto" href="{{ route('register') }}">S'enregistrer</a> --}}
                                    @endif
                                </p>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                @endsection

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
