
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profileimage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Netflix Pakistan - Watch TV Shows Online, Watch Movies Online</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" style="width: 50%">
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

    <h5 class="pt-3 pb-3" style="padding-left:50px;text-transform: uppercase;letter-spacing: 3px;">upload profile image</h5>
  <form action="/saveprofile" method="POST" enctype="multipart/form-data">
                   @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style=" position: relative">
                <div class="mainpfcontainer">
                    <img src="/images/holder.png" class="pfimg" style="border-radius:50%;width: 300px; height:300px;" id="img-holder" alt="">
                    <div class="imageChanger pt-5">

                        <div class="custom-file" style="width: 60px;margin-top: 50px">
                            <input type="file" name="image" class="custom-file-input" id="customFileLangHTML" >
                            <label class="custom-file-label" style="background-color: transparent;font-size: 3.5rem;" for="customFileLangHTML" data-browse="+"></label>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-3 pb-3">
              
                    {{-- <input type="file"> --}}
                    {{-- <div class="custom-file" style="width: 400px">
                    <input type="file" name="image" class="custom-file-input" id="customFileLangHTML">
                    <label class="custom-file-label" for="customFileLangHTML" data-browse="Browse"></label>
                    </div> --}}
                    <br>
                    <input type="submit" class="btnNextFromProfileImage" value="NEXT" >
                
            </div>
        </div>
    </div>

    </form>

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="btnNextFromProfileImage">NEXT</a>
            </div>
        </div>
    </div> --}}

    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-3 pb-3">
                <a style="font-size: 1rem;font-weight: 600;letter-spacing: 1px" href="#">I'll do it later</a>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $("#customFileLangHTML").change(function(e){

                var source = URL.createObjectURL(e.target.files[0]);
                console.log(source);
                $("#img-holder").attr("src",source);
            });
        });
    </script>


</body>
</html>
