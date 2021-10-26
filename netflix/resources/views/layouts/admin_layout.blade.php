
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/home.css') }}" rel="stylesheet">
     
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="big-container d-flex">
        <div class="side-menu" id="sidemenu">
                <div class="content-sidenav" style="width: 270px;text-align: center" id="contentSideNav">
                    <img src="/images/nfLogo.png" class="logo" alt="">
            <br>
            <img src="/images/pimg11.png" class="avatar" alt="">
            <h2>David Smith Johnson</h2>
            <p >davidsmith22@gmail.com</p>
            <div class="social-btns">
                <button><i class="fa fa-facebook"></i></button>
                <button><i class="fa fa-instagram"></i></button>
                <button><i class="fa fa-linkedin"></i></button>
            </div>

            <div class="nav-btns">
                <button>
                    <span class="btn-spacer"></span>
                    <i class="fa fa-home"></i>
                    <span class="btn-spacer"></span> 
                    home
                </button>
                <button>
                    <span class="btn-spacer"></span>
                    <i class="fa fa-users"></i>
                    <span class="btn-spacer"></span> 
                    Users
                </button>
                <button>
                    <span class="btn-spacer"></span>
                    <i class="fa fa-film"></i>
                    <span class="btn-spacer"></span> 
                    Movies
                </button>
                <button>
                    <span class="btn-spacer"></span>
                    <i class="fa fa-th-list"></i>
                    <span class="btn-spacer"></span> 
                    Policies
                </button>

                </div>
            </div>
        </div>


        <div class="main-content">

            <nav class="top-nav">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <img src="/images/nflogo.png" id="navLogo" style="height: 50px; margin:0px 20px 5px 30px;" alt="">
                        <button onclick="onBtnNavClick()" class="btn-nav" id="btnNav"><i class="fa fa-bars"></i></button>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-profile d-flex justify-content-end">
                            <img src="/images/pimg11.png" alt="">
                            <p>David Smith Johnson</p>
                            <div class="btn-group">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" >
                                    <li><a href="#"><i class="fa fa-sign-out"></i> Sign Out</a></li>
                                    <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>


            <div class="view-content">
                @yield('view-set')
            </div>


        </div>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#customFileCImage').change(function(e){
                var source = URL.createObjectURL(e.target.files[0]);
                $('#cvrImg').attr('src',source)
            });

            $('#customFileTrailer').change(function(e){
                var source = URL.createObjectURL(e.target.files[0]);
                $('#vdTrailer').attr('src',source)
            });

            $('#customFileMovie').change(function(e){
                var source = URL.createObjectURL(e.target.files[0]);
                $('#vdMovie').attr('src',source)
            });
        });
    </script>
</body>
</html>