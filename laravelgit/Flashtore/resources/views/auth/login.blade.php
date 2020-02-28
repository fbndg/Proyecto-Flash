@extends('layouts.app')

@section('content')

    <div class="row cont2">
        <div class="col-lg-12 mx-auto entero2">
            <div class="card card-signin flex-row my-5">

                <div class="card-body">
                  <h5 class="card-title text-center">{{ __('Login') }}</h5>
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf


                        <div class="form-label-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Email</label>



                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <hr>

                        <div class="form-label-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">


                            <label for="password">{{ __('Contraseña') }}</label>


                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>



                        <div class="custom-control custom-checkbox check">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="custom-control-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>




                        @if (Route::has('password.request'))
                          <a class="d-block pb-2 text-center mt-2 small" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                          </a>
                        @endif
                        <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">
                            {{ __('Ingresar') }}
                        </button>

                        <a class="d-block text-center mt-2 small" href="registro.php">Registrarse</a>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Ingresá con Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Ingresá con Facebook</button>


                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
