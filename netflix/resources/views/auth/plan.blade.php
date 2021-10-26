
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
                    <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="sign-up-form p-5">
       <br>
        <div class="text-center">
             <i class="fa fa-check cust-icon"></i>
        </div>
        <p class="pt-4 text-center">STEP <b>2</b> OF 3</p>
        <h1 style="font-size: 2rem" class="text-center">Choose your plan.</h1>
        <h5 class="pt-4"><i class="fa fa-check"></i>
        No commitments, cancel anytime.</h5>
         <h5 class="pt-4"><i class="fa fa-check"></i>
        Everything on Netflix for one low price.</h5>
         <h5 class="pt-4"><i class="fa fa-check"></i>
        No ads and no extra fees. Ever.</h5>
        <form action="">
            <a href="/offers">Next</a>
        </form>
    </div>

</body>
</html>

