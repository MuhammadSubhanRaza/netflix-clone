

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
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/movies.css') }}" rel="stylesheet">

    
 </head>
 <body>
     

    <nav class="container-fluid">
        <div class="row pl-5 pr-5">
            <div class="col-md-1">
                <a href="/">
                    <img src="/images/nfLogo.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">TVShows</a></li>
                    <li><a href="/movies">Movies</a></li>
                    <li><a href="#">Latest</a></li>
                    <li><a href="#">My List</a></li>
                </ul>
            </div>
            <div class="col-md-6 nav-profile-sec ">
                <div class="d-flex justify-content-end" >
                    <button class="btn" id="btnSearch"><i class="fa fa-search"></i></button>
                    <div id="txtSearchContainer">
                        <input type="text" placeholder="Movie Name" class="form-control searchText" id="txtSearch">
                    </div>
                    <a href="#">Kids</a>
                    <button class="btn"><i class="fa fa-bell"></i></button>
                    <img src="/images/moviecover.jpg" style="height:40px;width: 40px" alt="">
                    <div class="btn-group">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" style="background-color: rgb(32, 32, 32)">
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="pt-5 pb-5" style="color: gray">{{ $movie->name }}</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <video style="width: inherit" controls>
                    <source src="/storage/{{ $movie->movie }}" type="video/mp4">
                        <source src="/storage/{{ $movie->movie }}" type="video/ogg">
                </video>
            </div>
        </div>
    </div>

    <br><br>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-warning"><i class="fa fa-plus"></i>&nbsp; Add To My List</button>
            </div>
        </div>
    </div>
    
    <br><br><br>

 </body>
 </html>
