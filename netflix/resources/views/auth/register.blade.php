
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
                <h5>Input your information</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="register-container">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group pt-2">
                            <div>
                                <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <div>
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $userEmail ?? old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Email Not Unique</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <div >
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <div>
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <input type="hidden" value="0" name="PriceplanId">
                        {{-- <input type="text" value="0"> --}}

                       

                        <div class="form-group pt-2">
                            <div>
                                <button type="submit" class="btn-register">
                                    Next 
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