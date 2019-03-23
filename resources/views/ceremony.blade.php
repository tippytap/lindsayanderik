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
                        Our Ceremony
                    </div>
                </h1>
            </div>

            <div class="mtn paralaxThis">
                <img src="images/mtns.svg" alt="">
            </div>


            <div id="travel" class="content travel">
                <div class="photo-container paralaxThis left">
                    <div class="photo">
                        <img src="images/lin-erik-sundara.jpg" alt="Lindsay and Erik standing in front of a fence at Sundara venue">
                    </div>
                </div>
                <div class="card-container w-50 right">
                    <div class="card layer-up">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="card-heading text-left">
                                        <strong>
                                            <span class="primary-heading">Our Ceremony</span>
                                        </strong>
                                    </h4>
                                    <p class="text-left">
                                        Our ceremony will begin at 5:00pm on June 1, 2019. The ceremony will take place at Sundara, a beautiful estate nestled in the shadow of Cahas Mountain, in Lindsay's hometown of Boones Mill, VA.
                                        <br>The address is: <em><address>453 Apple Rd, Boones Mill, VA 24065</address></em>
                                    </p>
                                    <p class="text-left">
                                        Dinner and dancing will follow the ceremony in the same location.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="card-container w-100 center">
                    <div class="card layer-up w-75">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="card-heading text-center">
                                        <strong>
                                            <span class="primary-heading">Our party</span>
                                        </strong>
                                    </h4>
                                    <div class="row">
                                        <ul class="reset-list col-xs-12 col-md-6 party-list">
                                            <li>
                                                <p class="text-center">Bridesmaids</p>
                                                <hr class="w-50">
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/_bridesmaids/bethel-crop.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Bethel Tan</span>
                                                    <br>
                                                    <span class="title"><strong>Maid of honor</strong></span>
                                                    <span class="description w-50 center-block">I met Bethel my senior year of college through church and a dance team, which led us to many shared performances, including in a DC subway! We have been good friends ever since and I was the maid of honor in her wedding to Brian in 2008.</span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/_bridesmaids/mollie-crop.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Mollie Harrison</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        Mollie and I have been good friends since high school, when we did everything together, including cross country, track, band, going to Dave Matthews Band concerts, and working at Chuck E. Cheese.
                                                    </span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/_bridesmaids/elizabeth-crop.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Elizabeth Scott</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        Elizabeth and I lived together for two years in Wilmington, a.k.a "the glory years." We have way more inside jokes than any two people should have, and she's my favorite person to stick my heels in the ocean with.
                                                    </span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/_bridesmaids/claire-crop.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Claire Sanderson</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        Claire and I worked together at Fralin Life Science Institute at Virginia Tech (Fralinites for life!), and quickly bonded due to our mutual love of all animals, Cabo Fish Taco, and adventuring!  Born just two weeks apart, she is pretty much my twin sister from another continent.
                                                    </span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/_bridesmaids/jess-crop.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Jessica Muller</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        Jess is Erik's sister, and I couldn't ask for a more loving, genuine, thoughtful and fun person to soon be related to!  We share a love of books and writing, and she is the best book recommender in the world.
                                                    </span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/_bridesmaids/shannan-crop.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Shannan Stevens</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        I met Shannan in Wilmington at a young professionals networking event, and we became fast friends over our shared love of journalism, the Fat Pelican and the beach. Every outing with her turns into a fun adventure and will probably involve talking to strangers.
                                                    </span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/_bridesmaids/beth-crop.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Beth Tate</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        Beth was my "random" dorm roommate in college, and man, did I luck out! We have so many great memories from 351 Peddrew-Yates, Circle K, and NLCF! Her math major skills are the only reason I was able to pass Business Calc-- thank you Beth! 
                                                    </span>
                                                </p>
                                            </li>
                                        </ul>
                                        <ul class="reset-list col-xs-12 col-md-6 party-list">
                                            <li>
                                                <p class="text-center">Groomsmen</p>
                                                <hr class="w-50">
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/kenny-fb.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Kenny Howell</span>
                                                    <br>
                                                    <span class="title"><strong>Best man</strong></span>
                                                    <span class="description w-50 center-block">
                                                        Kenny Howell and I have been friends since high school, and best friends ever since we got into a summer-long argument over the definition of a sandwich. We’ve been through it all: all-night gaming sessions, road trips, music shows, and a six-month long backpacking experience. The world has not seen the like of this best-man before.
                                                    </span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/chrispy-fb.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Chris (Chrispy) Peterson</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        Chrispy and I met during a dinner he hosted. It became clear we both needed a roommate, and thus spent our senior year sharing an apartment. We bonded quickly over having our stuff stolen by our other roommate, building a snow wall over our neighbors’ front door, a shared love of Star Wars, and just chilling at the river. Nicest guy you’ll ever meet.
                                                    </span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/tom-fb.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Tom Yancey</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        Tom is a work bud. But not just any work bud. Tom taught me a lot about programming and has been an encouraging example for challenging myself. He has impeccable taste in just about everything. He’s always had my back, and is always up for floating down the river, gaming, or just chilling and watching bad tv. He once put a whole bunch of glitter in his beard and it was fabulous.
                                                    </span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/brian-marsh-fb.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Brian Marsh</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        I met Brian in art school, and he was immediately the most chill person I knew. I got some great music from him while he was DJing at the Radford University radio station. We were roommates for a year, and I learned about his passion for Pokemon and Smash Bros. We lived in a really cheap place, but we made it fun.
                                                    </span>
                                                </p>
                                            </li>
                                            <li class="center-block">
                                                <div class="img-constrain center-block one-one w-50">
                                                    <img src="images/brian-muller-fb.jpg" class="center-block" alt="">
                                                </div>
                                                <p class="text-center">
                                                    <span class="name">Brian Muller</span>
                                                    <br>
                                                    <span class="description w-50 center-block">
                                                        He’s my most-awesome-brother-in-law-who-is-way-better-than-yours-and-how-could-I-possibly-know-that-but-I-do. I am in awe of his musical talent. He’s a critical thinker, a great dad, a wonderful husband, and a fellow geek. 
                                                    </span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <h4 class="text-center" style="font-size: 2em; color: white; font-family: 'Rubik', sans-serif;">Sundara</h4>
                <br>
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
            </div>

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
                var src = $(this).find("img").attr('src');
                $(this).css({
                    "background": "url(" + src + ") no-repeat center center"
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