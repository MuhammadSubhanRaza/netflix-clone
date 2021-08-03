<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="main-container">
        <div class="inner-container">
            <img src="/images/nfLogo.png" alt="">


            <div class="login-container">
                <h2>Sign In</h2>
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                           <div class="col-md-12">
                                <input placeholder="Email" id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input placeholder="Password" id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <div class="form-check" style="color: rgb(107, 107, 107)">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <a style="color:rgb(107, 107, 107);" href="#">Need help?</a>
                                </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                    <div class="pt-3">
                        <a href="#"  style="color: rgb(107, 107, 107)">
                            <i class="fa fa-facebook" style="font-size: 1rem;background-color: rgb(0, 100, 214);color: white;padding: 5px 5px 0px 5px"></i>
                            &nbsp;&nbsp;Login with Facebook
                        </a>
                    </div>

                    <div class="pt-3">
                        <h5>New to Netflix? &nbsp;&nbsp;<a style="font-size: 1rem" href="#">Sign up now</a></h5>
                    </div>
                    <div class="pt-2">
                        <p>This page is protected by Google reCAPTCHA to ensure you're not a bot.
                            <a href="#">Learn more</a>
                        </p>
                    </div>
            </div>

        </div>
    </div>

</body>
</html>