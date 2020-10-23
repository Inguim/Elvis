@extends('layouts.app')

@section('content')
<div class="container col-12">
    <form method="POST" action="{{ route('login') }}" class="form-group col-md-12">
        <h1 class="text-lg-left">{{ __('Logar') }}</h1>
        @csrf
        <div class="form-group row">
            <div class="col-md-12">
                <input id="email" type="email" class="input form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
                <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="SENHA">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
                <div class="form-check  d-flex">
                    <div class="mr-auto">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Relembrar acesso') }}
                        </label>
                    </div>
                    <div class="mrl-auto">
                        @if (Route::has('password.request'))
                        <a id="link-senha" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0 align-items-center" id="fot-login">
            <div class="col-md-12">
                <button type="submit" id="button">
                    {{ __('Login') }}
                </button>
                <a href="{{ route('register') }}">Não possui cadastro? <span>Cadastre-se</span></a>
            </div>
        </div>

    </form>
</div>
@endsection
