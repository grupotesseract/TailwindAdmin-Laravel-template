@extends('layouts.auth')

@section('content')

<div class="w-full max-w-xs">
    <h1 class="font-sans font-hairline mb-6 text-center">Login Here</h1>
    <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf

    <div class="mb-4">
        <label class="block text-grey-darker text-sm font-hairline mb-2" for="email">
        E-Mail Address (admin@admin)
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" type="email" placeholder="user@email.com" required autofocus>
    </div>
    <div class="mb-6">
        <label class="block text-grey-darker text-sm font-hairline mb-2" for="password">
        Password (admin)
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="password" type="password" placeholder="******************" required>
        <!-- <p class="text-red text-xs italic">Please choose a password.</p> -->
    </div>
    <div class="flex items-center justify-between">
        <a href="/dashboard">
        <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="button">
        Sign In
        </button>
        </a>
        <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="/dashboard">
        Forgot Password?
        </a>
    </div>
    </form>
    <p class="text-center text-grey text-xs">
    ©2018 tailwindadmin. All rights reserved.
    </p>
</div>

@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
