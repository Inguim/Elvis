@extends('layouts.app')

@section('content')
<div class="container col-12" id="email-container">

    @if (session('status'))
    <div class="alert alert-success col-12 my-2" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        <h1 class="text-lg-left">{{ __('Reset Password') }}</h1>

        @csrf

        <div class="form-group row">
            <div class="col-md-12">
                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-center mb-0">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
