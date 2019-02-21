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
                        <a href="{{ url('/home') }}">Home</a>
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
                        <a href="#">Travel</a>
                    </li>
                    <li>
                        <a href="#">Registry</a>
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
                <h1>Lindsay + Erik</h1>
                <h2>June 1, 2019</h2>
            </div>

            <div class="mtn paralaxThis">
                <img src="images/mtns.svg" alt="">
            </div>


            <div id="rsvp" class="content hidden">
                <div class="card-container w-50">
                    <div class="card w-100 layer-up">
                        <div class="card-content">
                            <h3>Save the date</h3>
                            <p><strong>June 1, 2019</strong></p>
                            <p>Lindsay and Erik are getting married! Please join us for a warm, summer's evening of romance and whimsy.</p>
                            <p>Sundara, Boones Mill, Virginia</p>
                        </div>
                    </div>
                </div>
                <div class="photo-container paralaxThis right w-50">
                    <div class="photo">
                        <img class="" src="images/laughing.jpg" alt="erik and lindsay laughing">
                    </div>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>