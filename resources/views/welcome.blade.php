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
                        <a href="#travel">Travel</a>
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
                            <p><strong>June 1, 2019</strong><br/>Sundara, Boones Mill, Virginia<br/><strong>5:00pm</strong></p>
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

            <div id="travel" class="content ">
                <div class="card-container w-50 center">
                    <div class="card layer-up">
                        <div class="card-content">
                            <h3>Travel</h3>
                            <p class="text-left">We have held rooms at a local hotel. We have also reserved a shuttle to carry you to the venue and back. Please check back to find details soon!</p>
                            {{-- <a class="btn btn-primary" href="#">Book a room</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div id="registry" class="content">
                <div class="card-container row center">
                    <div class="card layer-up col-md-6 col-xs-12">
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
            $('#honeyfund').hover(function(){
                var img = $(this).find('img');
                img.each(function(){
                    if($(this).hasClass('hide')){
                        $(this).removeClass('hide').addClass('show');
                    }
                    else{
                        $(this).removeClass('show').addClass('hide');
                    }
                })
            });
        });
        </script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/brands.js" integrity="sha384-zJ8/qgGmKwL+kr/xmGA6s1oXK63ah5/1rHuILmZ44sO2Bbq1V3p3eRTkuGcivyhD" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/fontawesome.js" integrity="sha384-xl26xwG2NVtJDw2/96Lmg09++ZjrXPc89j0j7JHjLOdSwHDHPHiucUjfllW0Ywrq" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>