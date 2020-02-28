@extends('layouts.app')

@section('content')

    <div class="row cont2">
        <div class="col-12 mx-auto entero2">
            <div class="card card-signin flex-row my-5">

                <div class="card-body">
                  <h5 class="card-title text-center">{{ __('Registro') }}</h5>
                    <form class="form-signin" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-label-group">

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            <label for="name">{{ __('Nombre de Usuario') }}</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-label-group">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Dirección de email" name="email" value="{{ old('email') }}" required autocomplete="email">

                            <label for="email">{{ __('E-Mail') }}</label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <hr>

                        <div class="form-label-group">

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">


                            <label for="password">{{ __('Password') }}</label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-label-group">

                          <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="password_confirmation" required autocomplete="new-password">

                          <label for="password-confirm">{{ __('Confirm Password') }}</label>

                        </div>

                        <input class="d-none" type="text" name="idRol" value="2">
                        <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">
                            {{ __('Registrarse') }}
                        </button>
                        <a class="d-block text-center mt-2 small" href="login.php">Ingresar</a>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Regístrate con Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Regístrate con Facebook</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
