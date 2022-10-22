
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Netflix Pakistan - Watch TV Shows Online, Watch Movies Online</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" style="width: 50%">



    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/custom.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/movies.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/owl/owl.theme.green.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet"/>

    
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/vendor/carouselCustom.js') }}"></script>

    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    

<style>
    .btn1{
        padding: 10px;
        text-decoration: none;
        background: rgb(224, 0, 0);
        color: white
    }
    .btn1:hover{
        color: white;
        text-decoration: none
    }
    .btn2:hover{
        color:  rgb(224, 0, 0);
        text-decoration: none
    }
    .btn2{
        padding: 10px;
        text-decoration: none;
        border: 1px solid  rgb(224, 0, 0);
        background:white;
        color:  rgb(224, 0, 0);
        width: 100px
    }
    h2{
        text-align: center;
        font-size: 60px
    }
table,tr,th,td{
    border: 1px solid rgb(224, 0, 0);
    padding: 10px;
    text-align: center
}

    .genreDropDownLink
    {
        color: white;
        font-size: 1rem;
        text-decoration: none;
        padding-right: 15px;
    }
    .genreDropDownLink:hover
    {
        text-decoration: none;
    }
    .dropdown-item-cust
    {
        text-decoration: none;
        color: white;
        padding: 10px;
        transition: 0.3s;
        /* display: block; */
        width: 150px;
        display: inline-block;
    }
    .dropdown-item-cust:hover
    {
        text-decoration: none;
        color: gray;
    }
</style>
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
                    <li><a href="http://localhost:8000/movies">Home</a></li>
                    <a class="genreDropDownLink" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Genres
                    </a>
                        <div style="color: white;background-color:rgba(0,0,0,0.8)" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($allGenres as $genre)
                                <a class="dropdown-item-cust" href="/movies/genre/{{ $genre->name }}">{{ $genre->name }}</a>
                            @endforeach
                        </div>
                        
                    <li><a href="/movies">Movies</a></li>
                    <li><a href="#">Latest</a></li>
                    <li><a href="/mymovieList">My List</a></li>
                </ul>
            </div>
            <div class="col-md-6 nav-profile-sec ">
                <div class="d-flex justify-content-end" >
                    <button class="btn" id="btnSearch"><i class="fa fa-search"></i></button>
                    <div id="txtSearchContainer">
                        <form action="/movies" method="GET">
                        <input type="search" name="search"placeholder="Movie Name" class="form-control searchText" id="txtSearch">
                        </form>
                    </div>
                    <a href="#" >{{Auth::user()->name}}</a>
                    <button class="btn"><i class="fa fa-bell"></i></button>
                    {{-- <img src="storage/uploads/{{ $profilepic->image}}" style="height:40px;width: 40px" alt=""> --}}
                    <div class="btn-group">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" style="background-color: rgb(32, 32, 32)">
                            <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer p-5>
        <div class="container p-5">
            <div class="row">
                <div class="col-md-12">
                    <h6>Questions? Contact us.</h6>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-3">
                    <a href="#">FAQ</a>
                    <a href="#">Investor Relations</a>
                    <a href="#">Privacy</a>
                    <a href="#">Speed Test</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Help Center</a>
                    <a href="#">Jobs</a>
                    <a href="#">Cookie Preferences</a>
                    <a href="#">Legal Notices</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Account</a>
                    <a href="#">Ways to Watch</a>
                    <a href="#">Corporate Information</a>
                    <a href="#">Only on Netflix</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Media Center</a>
                    <a href="#">Terms of use</a>
                    <a href="#">Contact us</a>
                </div>
            </div>

        </div>
    </footer>