<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Lindsay and Erik Wedding!!!!</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css"/>
        <!-- <link href="https://fonts.googleapis.com/css?family=Karla:700|Varela+Round" rel="stylesheet"> -->
    </head>
    <body>
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a class="btn btn-primary" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-primary" href="{{ url('/login') }}">Login</a>
                        {{-- <a href="{{ url('/register') }}">Register</a> --}}
                    @endif
                </div>
            @endif
        <main class="wrapper">
            <nav>
                <ul>
                    <li>
                        <a href="#rsvp">RSVP</a>
                    </li>
                    <li>
                        <a href="#travel">Hotel</a>
                    </li>
                    <li>
                        <a href="#registry">Registry</a>
                    </li>
                    <li>
                        <a href="#">Story</a>
                    </li>
                </ul>
            </nav>
            <div class="sun-wrapper">
                <div class="sun"></div>
            </div>
            <div class="headline">
                <h1>
                    <div>
                    Lindsay + Erik
                    </div>
                </h1>
                <h2>June 1, 2019</h2>
            </div>

            <div class="mtn paralaxThis">
                <img src="images/mtns.svg" alt="">
            </div>


            <div id="rsvp" class="content ">
                <div class="card-container left w-50">
                    <div class="card layer-up col-md-12">
                        <div class="card-content">
                            <h3>Join Us!</h3>
                            <p><strong>5:00pm</strong><br/>Sundara, Boones Mill, Virginia<br/><strong>June 1, 2019</strong></p>
                            <p>Come celebrate our marriage with us!</p>
                            <a class="btn btn-primary" href='{{ url("/invite/1") }}'>RSVP Here</a>
                            <div style="margin-top: 10px;">or email us at <a href="mailto:lindskey@gmail.com">lindskey@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="photo-container paralaxThis right">
                    <div class="photo">
                        <img class="" src="images/laughing.jpg" alt="erik and lindsay laughing">
                    </div>
                </div>
            </div>

            <div id="travel" class="content">
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
                                    <h4 class="text-left">
                                        <strong style="font-size: 2em; text-transform: uppercase;">Hilton Garden Inn</strong><br>
                                        4500 South Peak Boulevard, Roanoke, Virginia 24018
                                    </h4>
                                        <br>
                                    <p class="text-left">
                                        For your convenience, a block of hotel rooms has been reserved at the Hilton Garden Inn.
                                    </p>
                                    <p class="text-left">
                                        You may make your reservation online by going to the link below or you may call the hotel directly to make your reservation. If you would prefer to call the hotel, please call <strong>540-776-3400</strong> and use the Group Code: <span style="color: red;">KEYMIL.</span>
                                    </p>
                                    <p class="text-left">
                                        Be sure to book your hotel room by <span style="color: red; text-transform: uppercase; font-weight: 700;">May 1st</span> in order to receive the discount rate.
                                    </p>
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

            <div id="registry" class="content">
                <div class="card-container row center">
                    <div class="card layer-up w-100">
                        <div class="card-content">
                            <h3>Registeries</h3>
                            <br>
                            <div class="registry">
                                <div class="registry-block">
                                    <a href="https://www.amazon.com/wedding/share/lindsayanderik" class="registry-link" aria-label="Amazon registry link">
                                        <span class="fab fa-amazon"></span>
                                    </a>
                                </div>
                                <div class="registry-block">
                                    <a id="honeyfund" href="https://www.honeyfund.com/wedding/TheMill-KeyWay" class="registry-link" aria-label="Honeyfund registry link">
                                        <img src="images/honeyfund.svg" class="show" alt="honeyfund logo">
                                        <img src="images/honeyfund-white.svg" class="hide" alt="honeyfund logo">
                                    </a>
                                </div>
                                <div class="registry-block">
                                    <a id="wayfair" href="#" class="registry-link" aria-label="Honeyfund registry link">
                                        <img src="images/wayfair.svg" class="show" alt="wayfair logo">
                                        <img src="images/wayfair-white.svg" class="hide" alt="wayfair logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            // $("#honeyfund").find('img').eq(1).hide();
            // $('#honeyfund').hover(function(){
            //     var img = $(this).find('img');
            //     img.each(function(){
            //         if($(this).hasClass('hide')){
            //             $(this).removeClass('hide').addClass('show');
            //         }
            //         else{
            //             $(this).removeClass('show').addClass('hide');
            //         }
            //     })
            // });
        });
        </script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/brands.js" integrity="sha384-zJ8/qgGmKwL+kr/xmGA6s1oXK63ah5/1rHuILmZ44sO2Bbq1V3p3eRTkuGcivyhD" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/fontawesome.js" integrity="sha384-xl26xwG2NVtJDw2/96Lmg09++ZjrXPc89j0j7JHjLOdSwHDHPHiucUjfllW0Ywrq" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>