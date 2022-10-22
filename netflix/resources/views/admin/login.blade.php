
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Netflix</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/login.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="main-container">
        <div class="login-container text-center">
            <img src="/images/nflogo.png" alt="">
            <h3 style="color: rgb(141, 141, 141)">Admin Login</h3>
            <p>Please enter your email and password</p>
            <form action="/Post/AdminLogin" method="POST">
                @csrf
                <input style="color:black" type="email" placeholder="Email" name="email">
                <br>
                <input type="password" placeholder="Password" name="password">
                <br>
                <button class="btnLogin" type="submit">
                    <i class="fa fa-sign-in"></i>&nbsp; Sign In
                </button>
            </form>
            <br>
            <a href="#">Forgot Password?</a>
            <br><br><br>
            <button class="btnSwtich">
                <i class="fa fa-toggle-on"></i>&nbsp; Switch to Member Mode
            </button>
        </div>
    </div>
</body>
</html>

