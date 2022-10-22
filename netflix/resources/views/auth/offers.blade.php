
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>Netflix</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" style="width: 50%">


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
<style>
    button{
        background: rgb(209, 0, 0);
        border:none;
        color: white
    }
</style>
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

    <div class="container offer-container pl-5 pr-5">
        <div class="row">
            <div class="col-md-6">
                <p class="pt-4">STEP <b>3</b> OF 3</p>
                <h1 style="font-size: 2rem">Choose your plan.</h1>
                <h5 class="pt-4"><i class="fa fa-check"></i>
                No commitments, cancel anytime.</h5>
                <h5 class="pt-4"><i class="fa fa-check"></i>
                Everything on Netflix for one low price.</h5>
                <h5 class="pt-4"><i class="fa fa-check"></i>
                No ads and no extra fees. Ever.</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
        <br>

        <div class="row offers-ribbon">
            <div class="col-md-12">
                <table>
                    <tr>
                        <td style="width: 38%;"></td>
                        <td>
                            <div class="offer-block">
                                <button onclick="btn()">
                                    Mobile
                                </button>
  
                            </div>
                        </td>
                        <td>
                            <div class="offer-block">
                                <button onclick="btn1()">
                                    Basic
                                </button>
                                                     
                            </div>
                        </td>
                        <td>
                            <div class="offer-block">
                                Standard
                            </div>
                        </td>
                        <td>
                            <div class="offer-block">
                                Premium
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                     
                    <tr>
                        <td style="width: 40%;text-align: left">Monthly price</td>
                        <td id="price1"><b>Rs475</b></td>
                        <td id="price2"><b>Rs950</b></td>
                        <td id="price3"><b>Rs1,200</b></td>
                        <td id="price4"><b>Rs1,500</b></td>
                    </tr>
                     <tr>
                        <td style="width: 40%;text-align: left">Video quality</td>
                        <td id="quality1"><b>Good</b></td>
                        <td id="quality2"><b>Good</b></td>
                        <td id="quality3"><b>Better</b></td>
                        <td id="quality4"><b>Best</b></td>
                    </tr>
                     <tr>
                        <td style="width: 40%;text-align: left">Resolution</td>
                        <td id="resolution1"><b>480p</b></td>
                        <td id="resolution2"><b>480p</b></td>
                        <td id="resolution3"><b>1080p</b></td>
                        <td id="resolution4"><b>4K+HDR</b></td>
                    </tr>
                     <tr>
                        <td style="width: 40%;text-align: left">Devices you can use to watch</td>
                        <td>
                            <div class="text-center" style="width: 40px">
                                <i id="pic1" class="fa fa-mobile" style="font-size: 1.4rem;color:rgb(102, 102, 102)"></i><br>
                                <p id="text1">Phone</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i id="pic12" class="fa fa-tablet" style="font-size: 1.4rem;color:rgb(104, 104, 104)"></i><br>
                                <p  id="text2">Tablet</p>
                            </div>
                        </td>
                        <td>
                            <div class="text-center" style="width: 40px">
                                <i id="pic2" class="fa fa-mobile" style="font-size: 1.4rem;color:rgb(102, 102, 102)"></i><br>
                                <p id="text32">Phone</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i id="pic" class="fa fa-tablet" style="font-size: 1.4rem;color:rgb(104, 104, 104)"></i><br>
                                <p id="text31">Tablet</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i id="laptop1" class="fa fa-laptop" style="font-size: 1.4rem;color:rgb(102, 102, 102)"></i><br>
                                <p id="laptoptext1">Laptop</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i id="tv1" class="fa fa-television" style="font-size: 1.4rem;color:rgb(104, 104, 104)"></i><br>
                                <p id="tvtext1">TV</p>
                            </div>
                        </td>
                        <td>
                            <div class="text-center" style="width: 40px">
                                <i class="fa fa-mobile" style="font-size: 1.4rem;color:rgb(102, 102, 102)"></i><br>
                                <p>Phone</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i class="fa fa-tablet" style="font-size: 1.4rem;color:rgb(104, 104, 104)"></i><br>
                                <p>Tablet</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i class="fa fa-laptop" style="font-size: 1.4rem;color:rgb(102, 102, 102)"></i><br>
                                <p>Laptop</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i class="fa fa-television" style="font-size: 1.4rem;color:rgb(104, 104, 104)"></i><br>
                                <p>TV</p>
                            </div>
                        </td>
                        <td>
                            <div class="text-center" style="width: 40px">
                                <i class="fa fa-mobile" style="font-size: 1.4rem;color:rgb(102, 102, 102)"></i><br>
                                <p>Phone</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i class="fa fa-tablet" style="font-size: 1.4rem;color:rgb(104, 104, 104)"></i><br>
                                <p>Tablet</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i class="fa fa-laptop" style="font-size: 1.4rem;color:rgb(102, 102, 102)"></i><br>
                                <p>Laptop</p>
                            </div>
                            <div class="text-center" style="width: 40px">
                                <i class="fa fa-television" style="font-size: 1.4rem;color:rgb(104, 104, 104)"></i><br>
                                <p>TV</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
           <div class="col-md-9">
                <p style="color: rgb(105, 105, 105)">HD (720p), Full HD (1080p), Ultra HD (4K) and HDR availability subject to your internet service and device capabilities. Not all content is available in all resolutions. See our <a href="#">Terms of Use</a> for more details.
                </p>
           </div>
            <div class="col-md-9">
                <p style="color: rgb(104, 104, 104)">
                    Only people who live with you may use your account. Watch on 4 different devices at the same time with Premium, 2 with Standard, and 1 with Basic and Mobile.
                </p>
           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="/plancreate" class="btnOffer">Next</a>
            </div>
        </div>
        <br><br><br><br><br><br>
    </div>

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
                    <a href="#">Cookie Preferences</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Help Center</a>
                    <a href="#">Corporate Information</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Terms of Use</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Privacy</a>
                </div>
            </div>

        </div>
    </footer>

    <script>

function btn() {
  
    document.getElementById("price1").style.color = "red";
    
    document.getElementById("quality1").style.color = "red";

    
    document.getElementById("resolution1").style.color = "red";
    
    document.getElementById("pic1").style.color = "red";
    
    document.getElementById("pic12").style.color = "red";
    
    document.getElementById("text1").style.color = "red";
    
    document.getElementById("text2").style.color = "red";

}
function btn1() {
  document.getElementById("price2").style.color = "red";
  document.getElementById("quality2").style.color = "red";
  document.getElementById("resolution2").style.color = "red";
  document.getElementById("pic").style.color = "red";
  document.getElementById("pic2").style.color = "red";
  document.getElementById("text31").style.color = "red";
  document.getElementById("text32").style.color = "red";
  document.getElementById("laptop1").style.color = "red";
  document.getElementById("laptoptext1").style.color = "red";
  document.getElementById("tv1").style.color = "red";  
  document.getElementById("tvtext1").style.color = "red";

}


    </script>
</body>
</html>

