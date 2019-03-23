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
        <main class="wrapper blue-bg">
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

            <div id="registry" class="">
                <div class="card-container row center">
                    <div class="card layer-up w-100">
                        <div class="card-content">
                            <h3 class="text-center">Registeries</h3>
                            <br>
                            <div class="registry text-center">
                                <div class="registry-block">
                                    <a href="https://www.amazon.com/wedding/share/lindsayanderik" class="registry-link" aria-label="Amazon registry link">
                                        <span class="fab fa-amazon"></span>
                                    </a>
                                </div>
                                <div class="registry-block">
                                    <small>Contribute to our honeymoon with: </small>
                                    <a id="honeyfund" href="https://www.honeyfund.com/wedding/TheMill-KeyWay" class="registry-link" aria-label="Honeyfund registry link">
                                        <img src="images/honeyfund.svg" class="show" alt="honeyfund logo">
                                        <img src="images/honeyfund-white.svg" class="hide" alt="honeyfund logo">
                                    </a>
                                </div>
                                <div class="registry-block">
                                    <a id="wayfair" href="https://www.wayfair.com/registry/wedding/LindsayAndErikWedding" class="registry-link" aria-label="Honeyfund registry link">
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
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/brands.js" integrity="sha384-zJ8/qgGmKwL+kr/xmGA6s1oXK63ah5/1rHuILmZ44sO2Bbq1V3p3eRTkuGcivyhD" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/fontawesome.js" integrity="sha384-xl26xwG2NVtJDw2/96Lmg09++ZjrXPc89j0j7JHjLOdSwHDHPHiucUjfllW0Ywrq" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>