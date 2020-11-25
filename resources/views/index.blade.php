<!doctype html>
<html lang="en">


<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="fonts.googleapis.com/css7154.css?family=Open+Sans:300,400,700,800|Playfair+Display:,300,%20400,%20700"
          rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css%2banimate.css%2bowl.carousel.min.css.pagespeed.cc.3fcqddtTx_.css"/>
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/mediaelement%404.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet"
          href="fonts%2c_ionicons%2c_css%2c_ionicons.min.css%2bfonts%2c_fontawesome%2c_css%2c_font-awesome.min.css%2bcss%2c_style.css.pagespeed.cc.6aDObgFf1O.css"/>
    <!-- Theme Style -->
    @laravelPWA
</head>
<body>
<header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand absolute" href="/">{{config('app.name')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="/about">About</a>--}}
                    {{--</li>--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/messages" id="dropdown04" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Messages</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="">Audio Sermons</a>
                            <a class="dropdown-item" href="">Past Messages</a>
                            <a class="dropdown-item" href="">Bible Reading</a>
                        </div>
                    </li>
                    @auth()
                        <li class="nav-item">
                            <a class="nav-link" href="/home">dashboard</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ url('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- END header -->
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate">
                    <h1>Welcome to {{config('app.name')}}</h1>
                    <p class="mb-5">It is made for the people by the people to pray in the church of God.</p>
                    <p><a href="#" class="btn btn-white btn-outline-white">Request a prayer</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->
<section class="element-animate worship-time">
    <div class="half d-md-flex d-block">
        <div class="bg campmeeting" style="background-image: url(img/event_campmeeting.jpg);">
            <h2>Camp Meeting Will Start Soon</h2>
            <div class="mb-3" id="date-countdown"></div>
            <p><a href="#" class="btn btn-white btn-outline-white">Join Now</a></p>
        </div>
        <div>
            <h2 class="mb-5">Upcoming Events</h2>
            <a href="#" class="event-list-item first">
                <span class="date">APR 14</span>
                <p>Child Dedication</p>
                <span class="more">More Info</span>
            </a>
            <a href="#" class="event-list-item">
                <span class="date">APR 14</span>
                <p>Church Fellowship</p>
                <span class="more">More Info</span>
            </a>
            <a href="#" class="event-list-item">
                <span class="date">APR 14</span>
                <p>Mass Baptism</p>
                <span class="more">More Info</span>
            </a>
            <a href="#" class="event-list-item">
                <span class="date">APR 14</span>
                <p>School of the Prophets</p>
                <span class="more">More Info</span>
            </a>
        </div>
    </div>
</section>
<!-- END section -->
<section class="section pt-5 pb-2 bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
            <div class="col-md-12">
                <h2>Audio Sermons</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 mb-5">
                <div class="sermon element-animate">
                    <img src="img/ximg_1.jpg.pagespeed.ic.pWGuDOLege.jpg" alt="" class="img-fluid">
                    <div class="sermon-text">
                        <h2><a href="#">Arise, Shine</a></h2>
                        <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
                    </div>
                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <source src="../../../www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-5">
                <div class="sermon element-animate">
                    <img src="img/ximg_2.jpg.pagespeed.ic.mMIgsl8zZx.jpg" alt="" class="img-fluid">
                    <div class="sermon-text">
                        <h2><a href="#">Filled in Him</a></h2>
                        <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
                    </div>
                    <div class="player">
                        <audio id="player3" preload="none" controls style="max-width: 100%">
                            <source src="../../../www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-5">
                <div class="sermon element-animate">
                    <img src="img/ximg_3.jpg.pagespeed.ic.2zuQymamLB.jpg" alt="" class="img-fluid">
                    <div class="sermon-text">
                        <h2><a href="#">Jehovah the Creator</a></h2>
                        <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
                    </div>
                    <div class="player">
                        <audio id="player4" preload="none" controls style="max-width: 100%">
                            <source src="../../../www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<section class="section ">
    <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
            <div class="col-md-12">
                <h2>Latest Events</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 element-animate">
                <div class="media custom-media">
                    <img class="mr-3" width="30" src="img/30xNximg_1.jpg.pagespeed.ic.MACIWqgq2r.jpg"
                         alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0"><a href="#">Prayer &amp; Devotional for Children</a></h3>
                        <p class="post-meta">May 12, 2018, <a href="#">Children Ministries</a></p>
                        <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come, your
                            will be done, on earth as it is in heaven. Give us this day our daily bread, and forgive us
                            our debts, as we also have forgiven our debtors. And lead us not into temptation, but
                            deliver us from evil.'"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 element-animate">
                <div class="media custom-media">
                    <img class="mr-3" width="30" src="img/img_2.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0"><a href="#">We Must Walk In The Middle of The Road</a></h3>
                        <p class="post-meta">May 12, 2018, <a href="#">Missions</a></p>
                        <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come, your
                            will be done, on earth as it is in heaven. Give us this day our daily bread, and forgive us
                            our debts, as we also have forgiven our debtors. And lead us not into temptation, but
                            deliver us from evil.'"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 element-animate">
                <div class="media custom-media">
                    <img class="mr-3" width="30" src="img/img_3.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0"><a href="#">Tracts Giving</a></h3>
                        <p class="post-meta">May 12, 2018, <a href="#">Care Ministry</a></p>
                        <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come, your
                            will be done, on earth as it is in heaven. Give us this day our daily bread, and forgive us
                            our debts, as we also have forgiven our debtors. And lead us not into temptation, but
                            deliver us from evil.'"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<section class="section bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-8  text-center">
                <h2>Personal Testimony</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="owl-carousel testimony-slider">
                    <div>
                        <img src="img/xpastor_1.jpg.pagespeed.ic.NGae0iTF5f.jpg" alt="Image placeholder">
                        <blockquote>
                            <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come,
                                your will be done, on earth as it is in heaven. Give us this day our daily bread, and
                                forgive us our debts, as we also have forgiven our debtors. And lead us not into
                                temptation, but deliver us from evil.'"</p>
                        </blockquote>
                        <p>&mdash; Jeremy Watson</p>
                    </div>
                    <div>
                        <img src="img/xpastor_2.jpg.pagespeed.ic.O90vKAJDKQ.jpg" alt="Image placeholder">
                        <blockquote>
                            <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come,
                                your will be done, on earth as it is in heaven. Give us this day our daily bread, and
                                forgive us our debts, as we also have forgiven our debtors. And lead us not into
                                temptation, but deliver us from evil.'"</p>
                        </blockquote>
                        <p>&mdash; Albert White</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 mb-5">
                <h3>{{config('app.name')}}</h3>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor
                    blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
                <ul class="list-unstyled footer-link d-flex footer-social">
                    <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-5">
                <h3>{{config('app.name')}}</h3>
                <ul class="list-unstyled footer-link">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Organizational Chart</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-5">
                <h3>Messages</h3>
                <ul class="list-unstyled footer-link">
                    <li><a href="#">Audio Sermons</a></li>
                    <li><a href="#">Past Messages</a></li>
                    <li><a href="#">Bibe Reading</a></li>

                </ul>
            </div>
            <div class="col-md-4 mb-5">
                <h3>Visit or Talk to Us</h3>
                <ul class="list-unstyled footer-link">
                    <li class="d-block">
                        <span class="d-block">Address:</span>
                        <span class="text-white">34 Street Name, City Name Here, United States</span></li>
                    <li class="d-block"><span class="d-block">Telephone:</span><span
                                class="text-white">+1 242 4942 290</span></li>
                    <li class="d-block"><span class="d-block">Email:</span><span
                                class="text-white">info@yourdomain.com</span></li>
                </ul>
            </div>
        </div>
        {{--<div class="row">--}}
        {{--<div class="col-12 text-md-left text-left">--}}
        {{--<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
        {{--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>--}}
        {{--<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> <br> Demo Images Unsplash</p>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
</footer>
<!-- END footer -->
<!-- loader -->
<div id="loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214"/>
    </svg>
</div>
<script src="js/jquery-3.2.1.min.js.pagespeed.jm.Y8jX7FH_5H.js"></script>
<script src="js/popper.min.js%2bbootstrap.min.js.pagespeed.jc.d5UPE6lS7a.js"></script>
<script>eval(mod_pagespeed_LpUklG6ckI);</script>
<script>eval(mod_pagespeed_7z2SYei5Pr);</script>
<script src="js/owl.carousel.min.js%2bjquery.waypoints.min.js%2bjquery.countdown.min.js%2bmain.js.pagespeed.jc.OTossIVcJ0.js"></script>
<script>eval(mod_pagespeed_P7ovOHi8HD);</script>
<script src="cdn.jsdelivr.net/npm/mediaelement%404.2.7/build/mediaelement-and-player.min.js"></script>
<script>eval(mod_pagespeed__w5X0npLIp);</script>
<script>eval(mod_pagespeed_27DWItvDac);</script>
<script>eval(mod_pagespeed_dFlB3VoDG9);</script>
<script>document.addEventListener('DOMContentLoaded', function () {
        var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;
        for (var i = 0; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                shimScriptAccess: 'always',
                success: function () {
                    var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                    for (var j = 0; j < targetTotal; j++) {
                        target[j].style.visibility = 'visible';
                    }
                }
            });
        }
    });</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

</body>

</html>