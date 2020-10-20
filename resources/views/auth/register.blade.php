@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}" class="form-group col-md-12">
        <h1 class="text-lg-center">{{ __('Cadastrar') }}</h1>
        @csrf
        <div class="form-group col-md-12 d-flex justify-content-between" id="form-group-double">
            <input id="name" type="text" class="input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="NOME">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <input id="sobrenome" type="text" class="input form-control @error('sobrenome') is-invalid @enderror" name="sobrenome" value="{{ old('sobrenome') }}" required autocomplete="sobrenome" autofocus placeholder="SOBRENOME">

            @error('sobrenome')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
            <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="SENHA">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRMAR SENHA">
            </div>
        </div>
        <div class="form-group row mb-0 justify-content-center">
            <button type="submit" id="button" class="col-8">
                {{ __('Cadastrar') }}
            </button>
            <a href="{{ route('login') }}">Ja possui uma conta? <span>Logar</span></a>
        </div>
    </form>
</div>
@endsection
