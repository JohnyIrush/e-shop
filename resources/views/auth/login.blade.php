@extends('layouts.app')

@section('content')
<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-8 Theme">
            <div class="card Theme">
                <div class="card-header heading-color">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-white">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-white text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-white">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link link-color" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <hr class="bg-white">
                    <p class="heading-color mt-1 text-center">Do you have ann Account ? <a href="{{route('register')}}" class="link-color">Sign Up Instead</a> </p>
                </div>
                <hr class="bg-white">
                <div class="form-group">
                    <div class="col-sm-12 text-center">
                        <h4 class="text-white ">Or</h4>
                    </div>
                </div>
                <hr class="bg-white">
                <div class="row justify-content-center m-1 mt-1">
                      <a href=" {{route('github')}} " type="button" class="btn mr-1 btn-lg btn-secondary col-xs col-sm col-md-5 col-lg-5"> <i class="fab fa-github    "></i> Sign in With Github </a>
                      <a href=" {{route('google')}} " type="button" class="btn mt-1  btn-lg btn-primary col-xs col-sm col-md-5 col-lg-5"> <i class="fab fa-google    "></i> Sign in With Google </a>
                </div>
                <div class="row justify-content-center m-1 mt-1">
                      <a href=" {{route('linkedin')}} " type="button" class="btn mr-1  btn-lg btn-danger col-xs col-sm col-md-5 col-lg-5"> <i class="fab fa-linkedin    "></i> Sign in With Linkedin </a>
                      <a href=" {{route('pinterest')}} " type="button" class="btn mt-1 btn-lg btn-success col-xs col-sm col-md-5 col-lg-5" disabled> <i class="fab fa-pinterest    "></i> Sign in With Pinterest </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
