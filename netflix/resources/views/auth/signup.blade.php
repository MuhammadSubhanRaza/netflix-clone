
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
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
</head>
<body>
    
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/nfLogo.png" alt="">
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('login') }}">Sign in</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="sign-up-form">
        <br>
        <p class="pt-3">STEP 1 OF 3  </p>
        <h1>Welcome back! <br>Joining Netflix is easy.</h1>
        <h5 class="pt-2">Enter your password and you'll be watching in no time.</h5>
        <p style="font-size: 1.1rem" class="pt-2">Email</p>
        <h6>msraza302@gmail.com</h6>

        <form action="">
            <input type="password" placeholder="Enter your password">
            <br><br>
            <a href="#">Forgot your Password?</a>
            <br>
            <button>Next</button>
        </form>
    </div>

</body>
</html>

