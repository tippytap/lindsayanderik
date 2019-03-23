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
                        Our Story
                    </div>
                </h1>
            </div>

            <div class="mtn paralaxThis">
                <img src="images/mtns.svg" alt="">
            </div>

            <div id="" class="content ">
                <div class="card-container w-50 center">
                    <div class="card layer-up col-md-12">
                        <div class="card-content">
                            <h3>The beginning</h3>
                            <br>
                            Lindsay and Erik met in the summer of 2015 thanks to a combination of solid mutual friend recommendations and social media magic. They bonded over a pitcher of Parkway at the Cellar Restaurant in downtown Blacksburg on Wednesday night, where Erik told Lindsay how to make ice cream and she told him that she really enjoyed the song “The Wolf” by Mumford and Sons (a fact she would forget in three years). It was a match made in Heaven.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-constrain">
                            <img src="images/first-pic.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-constrain">
                            <img src="images/wrightsville.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-constrain">
                            <img src="images/greens.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-container w-50 center">
                    <div class="card layer-up col-md-12">
                        <div class="card-content">
                            Their next date was to go see the movie ‘Minons’ that Friday at the local Regal theater, and they both belly-laughed a good amount because they both like over-the-top snooty British accents and cute animal sounds as a means of communication. When they stepped into the humid summer night, into the vastness of the New River Valley Mall parking lot at 9 p.m., Lindsay realized frantically that she did not want the date to end. To her right, glowing like a sweet red-orange ember was the Red Robin. She pointed—want to go?  And then off they were, across the parking lot, which actually took a while because Red Robin isn’t as close as it looks from the Regal. When they arrived, they chatted some more—this time about poetry—he likes poetry!?—and favorite books in general and family and Erik’s upcoming family beach trip, which was going to take place the very next day. Lindsay imagined him, bags packed, moving slowly away in the family car, and she wondered: will I hear from him when he returns?
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-constrain">
                            <img src="images/halloween.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-constrain">
                            <img src="images/christmas.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-constrain">
                            <img src="images/abingdon.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-container w-50 center">
                    <div class="card layer-up col-md-12">
                        <div class="card-content">
                            And she didn’t. She heard from him the entire trip instead. And that’s when she knew that this was at least sort of a “thing.” He sent her pictures of the ocean and then asked if he could call her. CALL her. Lord, have mercy. Who even does that? So they chatted, and then some time over the course of the week he sent the best text. It said, ‘Will you go on a date with me?’ A date! And Lindsay immediately felt very elated and excited but also confused. Because she thought that they had already gone on like two dates already.  But still, the mention of the very word ‘date’ sent her to the moon, because in her very elongated single life, she had found such early clarifications rare. But this Erik Miller wanted to go on a date. It was pure magic. She said, yes, of course, and he came to pick her up the week after he was back from the beach. It was raining, and he came to the door with his umbrella and let her walk under it, even going around to the other side of the car so she wouldn’t have to get wet. As they were driving to dinner, they saw the most beautiful rainbow.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-constrain">
                            <img src="images/sleddin.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-constrain">
                            <img src="images/sunset-cliffs.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-constrain">
                            <img src="images/first-year.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-container w-50 center">
                    <div class="card layer-up col-md-12">
                        <div class="card-content">
                            Flash forward two years, and they’ve done all sorts of fun things. They’ve met each others’ families, spent holidays together, gone on numerous hikes, a few swims, a few drives, and also dancing. They’ve hosted cook-outs, visited friends in faraway places, and eaten so much sushi. It’s serious. They plan a beach trip for Labor Day Weekend 2017.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="w-50 center text-center">
                        <img src="images/proposal.gif" alt="">
                    </div>
                </div>
                <div class="card-container w-50 center">
                    <div class="card layer-up col-md-12">
                        <div class="card-content">
                            <h3>The Proposal</h3>
                            <br>
                            Erik realized the Labor Day beach trip was the perfect opportunity. Wilmington is a special place to Lindsay, because she got her master’s degree there. Having secretly bought an engagement ring and stowing it in his luggage, Erik hatched a plan. Whichever day was a clear, nice day, he would pop the ol’ question at sunset on the beach. Unfortunately, Saturday had gross weather, so it all fell to Sunday. It did not disappoint. After a clear day at the beach, Erik and Lindsay planned dinner in town. Erik knew that sunset was precisely 7:26pm that day, and the hour drew ever closer during dinner. He hurriedly drove them back to their condo. Lindsay had to go up to the room for a jacket but there was no time! Erik insisted that they go walking NOW. Once they were on the beach the next challenge presented itself. Which random stranger to coerce into taking our picture? After walking for a few minutes, panic washed over Erik like a cat who just heard a faint noise. He chose the closest, nice-looking couple and accosted them. After asking Lindsay to wait while he talked to them (she was starting to become suspicious), he let them in on what was about to happen: he would propose. The woman immediately clasped her hands over her mouth (no, don’t give away the game!) As the picture was about to be taken, he dropped down to one knee and pulled out the ring. Lindsay looked down at him, wide-eyed, and asked, “are you okay?” To which he responded by saying, very non-timidly, “willyoumarryme?” She of course said yes, and they happily power-walked about a mile down the beach into the sunset.
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </main>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/brands.js" integrity="sha384-zJ8/qgGmKwL+kr/xmGA6s1oXK63ah5/1rHuILmZ44sO2Bbq1V3p3eRTkuGcivyhD" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/fontawesome.js" integrity="sha384-xl26xwG2NVtJDw2/96Lmg09++ZjrXPc89j0j7JHjLOdSwHDHPHiucUjfllW0Ywrq" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript">

            $(document).ready(function(){
                $(".img-constrain").each(function(){
                    var src = $(this).find("img").attr('src');
                    console.log($(this));
                    $(this).css({
                        "background": "url(" + src + ") no-repeat center center"
                    });
                });
            });
        </script>
    </body>
</html>