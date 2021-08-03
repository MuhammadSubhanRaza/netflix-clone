
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

    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    

    <header>
        <div class="header-inner">
            <nav class="d-flex">
                <div class="col-md-6">
                    <img src="/images/nfLogo.png" alt="">
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('login') }}">Sign In</a>
                </div>
            </nav>
            <div class="inner-content text-center">
                <h1>Unlimited movies, TV <br> shows, and more.</h1>
                <h4>Watch anywhere. Cancel anytime.</h4>
                <h6>Ready to watch? Enter your email to create or restart your membership.</h6>
                <div class="input-group mb-3 header-form-email">
                    <input type="text" class="form-control" placeholder="Email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type="button" id="button-addon2">Get Started ></button>
                </div>
            </div>        
        </div>
    </header>

    <div class="spacer">
    </div>


    <section class="enjoy-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Enjoy on your TV.</h1>
                    <h5>Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</h5>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="video-holder">
                        <video  autoplay muted>
                            <source src="/videos/commercial.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="set-image" >
                            <img src="/images/homepng1.png" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <div class="spacer">
    </div>

    <section class="download-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-5 img-holder text-center">
                    <img src="/images/homejpg2.jpg" class="w-100" alt="">
                    <div class="img-over-loader d-flex">
                        <img src="/images/moviecover.jpg" height="70px" alt="">
                        <div>
                            <h5>London has Fallen</h5>
                            <p>Downloading...</p>
                        </div>
                        <img src="/images/loaderImage.gif" style="margin-left: 50px; margin-top:20px" height="30px" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h1>Download your shows to watch offline.</h1>
                    <h5>Save your favorites easily and always have something to watch.</h5>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer">
    </div>

    <section class="watch-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Watch everywhere</h1>
                    <h5>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</h5>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>

    <div class="spacer">
    </div>

    <section class="create-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="/images/homepng3.png" class="w-100 mt-5" alt="">
                </div>
                <div class="col-md-6">
                    <h1>Create profiles for kids.</h1>
                    <h5>Send kids on adventures with their favorite characters in a space made just for them—free with your membership.</h5>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer">
    </div>

    <section class="create-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Frequently Asked Questions</h1>
                    
                    <div class="faq-container">
                        <div class="accordion accordion-flush faq-head" id="accordionFlushExample">
                            <div class="accordion-item faq-item-cont">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What is Netflix?
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <h3>
                                            Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.
                                            <br><br>
                                            You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There's always something new to discover and new TV shows and movies are added every week!
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item-cont">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                                    How much does Netflix cost?
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <h3>
                                            Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from Rs475 to Rs1,500 a month. No extra costs, no contracts.
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item-cont">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Where can I watch?
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <h3>
                                            Watch anywhere, anytime, on an unlimited number of devices. Sign in with your Netflix account to watch instantly on the web at netflix.com from your personal computer or on any internet-connected device that offers the Netflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.
                                            <br><br>
                                            You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Netflix with you anywhere.
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item-cont">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                                    How do I cancel?
                                </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <h3>
                                            Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item-cont">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What can I watch on Netflix ?
                                </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <h3>
                                            Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix originals, and more. Watch as much as you want, anytime you want.
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item-cont">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Is Netflix good for kids?
                                </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <h3>
                                            The Netflix Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and movies in their own space.
                                            <br><br>
                                            Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific titles you don’t want kids to see.
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

           <div class="inner-content text-center">
               <h6 class="pt-5">Ready to watch? Enter your email to create or restart your membership.</h6>
               <div class="input-group mb-3 header-form-email">
                    <input type="text" class="form-control" placeholder="Email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type="button" id="button-addon2">Get Started ></button>
                </div>
            </div>     


    </section>

    <div class="spacer">
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


</body>
</html>
