{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}
    {{-- <form action="/priceplan/post" method="POST">
        <br>
        @csrf
        <br>
        <input type="text" name="firstname" placeholder="Firstname">
        <br>
        <input type="text" name="lastname" placeholder="Lastname">
        <br>
        <input type="number" name="cardnumber" placeholder="Card Number">
        <br>
        <input type="date" name="expiration" placeholder="Expiration Date">
        <br>
        <input type="text" name="security" placeholder="Security">
        <br>
        <select name="plan" >
            <option>Choose Your Plan</option>
            <option value="0">Mobile</option>
            <option value="2">Silver</option>
            <option value="3">Gold</option>
            <option value="4">Platnium</option>
        </select>
        <br>
        <input type="submit">
    </form>
</body>
</html> --}}







<!DOCTYPE html>
<html lang="en">
<head>
    <title>Netflix Register</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" style="width: 50%">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="/images/nfLogo.png" class="register-page-logo">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-2">
                <h5>Select Your Plan</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="register-container">
                    <form method="POST"  action="/priceplan/post">
                        @csrf

                        <div class="form-group pt-2">
                            <div>
                                <input id="name" placeholder="Firstname" type="text" class="form-control" name="firstname"  required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <div>
                                <input id="text" placeholder="Lastname" type="text" class="form-control " name="lastname"  required>

                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <div >
                                <input placeholder="CardNumber" style="padding:20px" type="number" class="form-control" name="cardnumber" required >
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <div>
                                <input  placeholder="ExpirationDate" style="padding:20px" type="date" class="form-control" name="expiration" required >
                            </div>
                        </div>
                        <div class="form-group pt-2">
                            <div>
                                <input  placeholder="Security" style="padding:20px" type="number" class="form-control" name="security" required >
                            </div>
                        </div>
                        <div class="form-group pt-2">
                            <div>
                                <select name="plan"  class="form-control" required  >
                                    <option style="padding:20px">Choose Your Plan</option>
                                    <option value="1">Rs250/month Mobile Plan</option>
                                    <option value="2">Rs450/month Basic Plan</option>
                                    <option value="3">Rs800/month Standard Plan</option>
                                    <option value="4">Rs1,100/month Premium Plan</option>
                                </select>
                            </div>
                        </div>
                        
                       

                        <div class="form-group pt-2">
                            <div>
                                <button type="submit" class="btn-register">
                                    Start Membership 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>