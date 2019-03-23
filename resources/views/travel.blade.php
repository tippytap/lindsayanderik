<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Lindsay and Erik Wedding!!!!</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css"/>
    </head>
    <body>
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a class="btn btn-primary" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-primary" href="{{ url('/login') }}">Login</a>
                    @endif
                </div>
            @endif
        <main class="wrapper">
            @if (Session::has('message'))
                <div class="alert alert-info wedding-alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <nav class="topnav">
                <ul>
                    <li>
                        <a href="{{ url('/#rsvp') }}">RSVP</a>
                    </li>
                    <li>
                        <a href="{{ url('/travel') }}">Travel</a>
                    </li>
                    <li>
                        <a href="{{ url('/registry') }}">Registry</a>
                    </li>
                    <li>
                        <a href="{{ url('/ceremony') }}">Ceremony</a>
                    </li>
                    <li>
                        <a href="{{ url('/story') }}">Story</a>
                    </li>
                </ul>
            </nav>
            <div class="sun-wrapper">
                <div class="sun"></div>
            </div>
            <div class="headline">
                <h1>
                    <div>
                        Accommodations
                    </div>
                </h1>
            </div>

            <div class="mtn paralaxThis">
                <img src="images/mtns.svg" alt="">
            </div>


            <div id="travel" class="content travel">
                <div class="photo-container paralaxThis left">
                    <div class="photo">
                        <img src="images/hiltongardeninn.jpg" alt="outdoor view of the Hilton Garden Inn">
                    </div>
                </div>
                <div class="card-container w-50 right">
                    <div class="card layer-up">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="card-heading text-left">
                                        <strong>
                                            <span class="primary-heading">Hilton Garden Inn</span>
                                            <em>4500 South Peak Boulevard, Roanoke, Virginia 24018</em>
                                        </strong>
                                    </h4>
                                    <p class="text-left">
                                        For your convenience, a block of hotel rooms has been reserved at the Hilton Garden Inn.
                                    </p>
                                    <p class="text-left">
                                        You may make your reservation online by going to the link below or you may call the hotel directly to make your reservation. If you would prefer to call the hotel, please call <strong>540-776-3400</strong> and use the Group Code: <span style="color: red;">KEYMIL.</span>
                                    </p>
                                    <p class="text-left">
                                        Be sure to book your hotel room by <span style="color: red; text-transform: uppercase; font-weight: 700;">May 1st</span> in order to receive the discount rate.
                                    </p>

                                    <h5 id="shuttle"><strong>Shuttle</strong></h5>
                                    <p class="text-left">
                                        There will also be a shuttle available from the hotel to Sundara which is approximately 15 minutes (10 miles) away. The shuttle will transport guests to the ceremony and return to the hotel after the reception. When RSVPing, please be sure to let us know if you plan to use the shuttle.
                                    </p>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="https://hiltongardeninn.hilton.com/en/gi/groups/personalized/R/ROAGIGI-KEYMIL-20190531/index.jhtml?WT.mc_id=POG">Book a room</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content travel">
                <div class="photo-container paralaxThis right w-75">
                    <div class="photo">
                        <img src="images/sundara-house.jpg" alt="Outside view of the house at the Sundara Venue.">
                    </div>
                </div>
                <div class="card-container w-50 left">
                    <div class="card layer-up w-50">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="card-heading text-left">
                                        <strong>
                                            <span class="primary-heading">Sundara Venue</span>
                                            <em><address>453 Apple Rd, Boones Mill, VA 24065</address></em>
                                        </strong>
                                    </h4>
                                    <h5><strong>From I-81:</strong></h5>
                                    <p class="text-left">
                                        <a href="https://goo.gl/maps/r2UEnXvznED2"><i class="fas fa-map-marked-alt">&nbsp;</i>&nbsp;&nbsp;Google map directions</a>
                                    </p>
                                    <ul>
                                        <li>
                                            <p class="text-left">
                                                <i class="fas fa-arrow-up"></i>&nbsp;&nbsp;Head northeast on I-81 N
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-left">
                                                <i class="fas fa-arrow-right"></i>&nbsp;&nbsp;Use the right 2 lanes to take exit 143 for I-581 S/US-220 S toward Airport/Roanoke
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-left">
                                                <i class="fas fa-arrow-up"></i>&nbsp;&nbsp;Continue onto I-581 S
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-left">
                                                <i class="fas fa-arrow-up"></i>&nbsp;&nbsp;Continue onto U.S. Hwy 220 S
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-left">
                                                <i class="fas fa-arrow-right"></i>&nbsp;&nbsp;Turn right onto State Rte 613
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-left">
                                                <i class="fas fa-arrow-right"></i>&nbsp;&nbsp;Turn left onto State Rte 614
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="content">
                <div class="row">
                    <div class="w-50 pull-left">
                        <div class="img-constrain pos-y-minus-150">
                            <img src="images/sundara-inside.jpg" alt="">
                        </div>
                    </div>
                    <div class="w-50 pull-left">
                        <div class="img-constrain pos-y-minus-150">
                            <img src="images/sundara-creek.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="w-100">
                        <div class="img-constrain sixteen-nine">
                            <img src="images/sundara-mtn.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="content"></div>

        </main>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.alert').each(function(){
                var $this = $(this);
                setTimeout(function(){
                    $this.fadeOut('slow');
                }, 5000);
            });

            $(".img-constrain").each(function(){
                console.log("boop");
                var src = $(this).find("img").attr('src');
                console.log($(this));
                $(this).css({
                    "background": "url(" + src + ") no-repeat"
                });
            })
        });
        </script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/solid.js" integrity="sha384-6FXzJ8R8IC4v/SKPI8oOcRrUkJU8uvFK6YJ4eDY11bJQz4lRw5/wGthflEOX8hjL" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/brands.js" integrity="sha384-zJ8/qgGmKwL+kr/xmGA6s1oXK63ah5/1rHuILmZ44sO2Bbq1V3p3eRTkuGcivyhD" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/fontawesome.js" integrity="sha384-xl26xwG2NVtJDw2/96Lmg09++ZjrXPc89j0j7JHjLOdSwHDHPHiucUjfllW0Ywrq" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>