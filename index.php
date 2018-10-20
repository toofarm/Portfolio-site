<?php ?>

<!DOCTYPE html>

<html>

<head>
    <title>shane's little internet home</title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KMCXG9Q');</script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="A website highlighting the web development and creative work of Shane Danaher. Stop in, say hi.">
    <meta name="keywords" content="web development,design,coding,websites,web dev">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/core-styles.min.css">
    <link rel="stylesheet" type="text/css" href="css/media-styles.min.css">
    <link rel="icon" type="image/jpg" href="favicon.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.scrollie.min.js"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMCXG9Q"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="greeting-meta-container" class="chunk" data-background="#F1ECF8">

        <!--        Navigation-->
        <nav>
            <!--            Landing nav-->
            <div id="nav-top">
                <ul>
                    <li class="underline" id="dev"><a href="#web-dev" target="">Web development</a></li>
                    <li class="underline" id="content-nav"><a href="#content">Creative</a></li>
                    <li class="underline" id="cv"><a href="#resume" target="">CV</a></li>

                </ul>
            </div>

            <!--            Pizza nav-->
            <ul class="creative-navi w-navi">
                <li id="w-trigger"><span class="creative-nav side-nav-heading" id="side-nav-w">writing</span>&nbsp;&nbsp;<object class="f-icon" type="image/svg+xml" data="assets/feather.svg">Your browser does not support SVGs</object>
                </li>
            </ul>
            <ul class="creative-navi a-navi">
                <li id="a-trigger"><span class="creative-nav side-nav-heading" id="side-nav-a">audio</span>&nbsp;&nbsp;<object class="f-icon" type="image/svg+xml" data="assets/headphones.svg">Your browser does not support SVGs</object>
                </li>
            </ul>
            <ul id="side-nav">
                <li><a href="#greeting-meta-container"><span class="side-nav-heading" id="side-nav-top">top</span>&nbsp;&nbsp;<i class="fa fa-circle-o circle" id="top-trigger" aria-hidden="true"></i></a>
                </li>
                <li><span class="side-nav-heading" id="side-nav-wd">web development</span>&nbsp;&nbsp;<a href="#web-dev"><i class="fa fa-circle-o circle" aria-hidden="true" id="wd-trigger"></i></a>
                </li>
                <li><span class="side-nav-heading" id="side-nav-creative">creative</span>&nbsp;&nbsp;<a href="#content"><i class="fa fa-circle-o circle" id="creative-trigger" aria-hidden="true"></i></a>
                </li>
                <li><span class="side-nav-heading" id="side-nav-cv">cv</span>&nbsp;&nbsp;<a href="#resume"><i class="fa fa-circle-o circle" id="cv-trigger" aria-hidden="true"></i></a>
                </li>
            </ul>

            <!--            Mobile nav-->
            <div class="mobile-nav-holder">
                <i class="fa fa-bars mobile-nav-toggle" aria-hidden="true"></i>
                <ul class="mobile-nav">
                    <li><a href="#greeting-meta-container">top</a></li>
                    <li><a href="#web-dev">web development</a></li>
                    <li><a href="#content">creative</a></li>
                    <ul class="creative-nav-mobile">
                        <li class="w-navi-mobile">writing —</li>
                        <li class="a-navi-mobile">audio —</li>
                    </ul>
                    <li><a href="#resume">cv</a></li>
                </ul>
            </div>

        </nav>

        <div id="greeting-container">
            <h1 id="greeting">Shane Danaher<br>Web Development / <br>Creative</h1>
        </div>

        <div id="icons-holder">
            <i class="fa fa-code" aria-hidden="true" id="brackets"></i>
            <i class="fa fa-volume-up" aria-hidden="true" id="speaker"></i>
            <i class="fa fa-briefcase" aria-hidden="true" id="tie"></i>
        </div>

        <div id="down-arrow">
            <a href="#web-dev" target=""><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
    </div>

    <div class="container">
            <!--    Web Development-->
        <div id="web-dev" class="chunk port-sec" data-background="#A18FA1">
            <h2>Web Development</h2>
            
    <!--            The Endless Hunt  -->
    <div class="wd-content-holder">
                <div class="overlay-text" id="lg-overlay-txt">Endless Hunt</div>
                <div class="wd-content-box blur" id="wd-content-box-eh">
                    <div class="site-thumb">
                        <div class="overlay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="wd-detail-box row" id="detail-box-bf">
                    <div class="close" id="test"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <div class="description col-lg-push-2 col-lg-4">
                        A web application for managing your neverending job hunt
                    </div>
                    <div class="details col-lg-4 col-lg-push-6">
                        <div class="details-inner d-1">
                            <h4>Technologies used</h4>
                            <ul>
                                <li>ReactJS</li>
                                <li>Redux</li>
                                <li>SCSS</li>
                                <li>D3.js</li>
                                <li>Firebase</li>
                            </ul>
                        </div>
                        <div class="details-inner d-2">
                            <h4>Details</h4>
                            <div class="details-txt">
                                This web application allows users to keep track of the jobs they've applied to, easily access information about their job hunt, and view graphical insights about their search.
                            </div>
                        </div>
                        <div class="details-nav">
                            <i class="fa fa-chevron-left l" aria-hidden="true"></i>
                            <i class="fa fa-chevron-right switch r" aria-hidden="true"></i>
                        </div>
                        <h5><a href="https://endlesshunting.com/" target="_blank">Visit the site</a></h5>
                    </div>
                </div>
            </div>

<!--            Postcards From Anywhere-->
            <div class="wd-content-holder">
                <div class="overlay-text" id="lg-overlay-txt">Postcards</div>
                <div class="wd-content-box blur" id="wd-content-box-pc">
                    <div class="site-thumb">
                        <div class="overlay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="wd-detail-box row" id="detail-box-bf">
                    <div class="close" id="test"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <div class="description col-lg-push-2 col-lg-4">
                        A web application that allows users to make custom postcards from anywhere on earth
                    </div>
                    <div class="details col-lg-4 col-lg-push-6">
                        <div class="details-inner d-1">
                            <h4>Technologies used</h4>
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>REST APIs</li>
                                <li>ReactJS</li>
                            </ul>
                        </div>
                        <div class="details-inner d-2">
                            <h4>Details</h4>
                            <div class="details-txt">
                                Built in ReactJS, this project uses the Google Street View API to create postcards of user-specified locations. The user can then use the app to customize his or her postcard, and download the results.
                            </div>
                        </div>
                        <div class="details-nav">
                            <i class="fa fa-chevron-left l" aria-hidden="true"></i>
                            <i class="fa fa-chevron-right switch r" aria-hidden="true"></i>
                        </div>
                        <h5><a href="http://citytechcedev.org/fssa/sdanaher/postcards-from-anywhere/" target="_blank">Visit the site</a></h5>
                    </div>
                </div>
            </div>
            
            <!--            GTM Super-Saver -->
                       <div class="wd-content-holder">
                <div class="overlay-text" id="lg-overlay-txt">GTM Super-Saver</div>
                <div class="wd-content-box blur" id="wd-content-box-gtm">
                    <div class="site-thumb">
                        <div class="overlay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="wd-detail-box row" id="detail-box-bf">
                    <div class="close" id="test"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <div class="description col-lg-push-2 col-lg-4">
                        A modest Google Chrome extension that helps streamline the Google Tag Manager workflow
                    </div>
                    <div class="details col-lg-4 col-lg-push-6">
                        <div class="details-inner d-1">
                            <h4>Technologies used</h4>
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>Javascript</li>
                                <li>Google Chrome APIs</li>
                            </ul>
                        </div>
                        <div class="details-inner d-2">
                            <h4>Details</h4>
                            <div class="details-txt">
                                This Google Chrome extension abstracts the process of saving and refreshing your preview pages while working in Google Tag Manager.
                            </div>
                        </div>
                        <div class="details-nav">
                            <i class="fa fa-chevron-left l" aria-hidden="true"></i>
                            <i class="fa fa-chevron-right switch r" aria-hidden="true"></i>
                        </div>
                        <h5><a href="https://chrome.google.com/webstore/detail/google-tag-manager-super/efhghemneglmmmlpjbcgidngpkhckbim?hl=en" target="_blank">Visit the site</a></h5>
                    </div>
                </div>
            </div>


<!--            Pizza journal-->
            <div class="wd-content-holder">
                <div class="overlay-text" id="pj-overlay-txt">Pizza Journal</div>
                <div class="wd-content-box" id="wd-content-box-pj">
                    <div class="site-thumb">
                        <div class="overlay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="conatiner-fluid">
                <div class="wd-detail-box row" id="detail-box-pj">
                    <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <div class="description col-lg-push-2 col-lg-4">
                        A web application that allows users to keep meticulous track of the pizza they eat
                    </div>
                    <div class="details col-lg-4 col-lg-push-6">
                        <div class="details-inner d-1">
                            <h4>Technologies used</h4>
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>PHP</li>
                                <li>Ajax</li>
                                <li>JQuery</li>
                                <li>Bootstrap</li>
                                <li>Sass</li>
                                <li>MySQL</li>
                            </ul>
                        </div>
                        <div class="details-inner d-2">
                            <h4>Details</h4>
                            <div class="details-txt">
                                The major challenges of this project included managing information from a JSON file and a database simultaneously, and rendering user inputs via Ajax.
                            </div>
                        </div>
                        <div class="details-nav">
                            <i class="fa fa-chevron-left l" aria-hidden="true"></i>
                            <i class="fa fa-chevron-right switch r" aria-hidden="true"></i>
                        </div>
                        <h5><a href="http://citytechcedev.org/fssa/sdanaher/landing.php" target="_blank">Visit the site</a></h5>
                    </div>
                </div>
            </div>
            
        </div>


        <!--    Creative-->
        <div id="content" class="chunk" data-background="#8F90AC8">
            <h2>Creative</h2>

            <div class="container-fluid">
                <div class="row prompt-row">
                    <div class="col-lg-4 col-lg-push-2">
                        <div class="prompt-box writing">
                            <object class="f-icon" fill="currentColor" type="image/svg+xml" data="assets/feather.svg">Your browser does not support SVGs</object>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-push-2">
                        <div class="prompt-box sound">
                            <object class="f-icon" fill="currentColor" type="image/svg+xml" data="assets/headphones.svg">Your browser does not support SVGs</object>
                        </div>
                    </div>
                </div>
            </div>

            <!--        Writing-->
            <div class="creative-container w">

                <!--                LARP Harder-->
                <div class="wd-content-holder">
                    <div class="overlay-text" id="lh-overlay-txt">LARP Harder
                        <br>
                        <div class="overlay-subhed">VICE Magazine</div>
                    </div>

                    <div class="wd-content-box" id="wd-content-box-lh">
                        <div class="site-thumb">
                            <div class="overlay">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="wd-detail-box row" id="detail-box-lh">
                        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="description col-lg-push-2 col-lg-4">
                            A reported study of the medieval recreationist combat festival known as 'Chaos Wars'
                        </div>
                        <div class="details col-lg-4 col-lg-push-6">
                            <div class="details-inner d-1">
                                <h4>Details</h4>
                                <div class="details-txt">
                                    In order to report this story, I traveled out to Hailey, Idaho and lived for two days in the woods with a group of people who enjoy role-playing as ogres, knights, and other creatures.<br>
                                </div>
                            </div>
                            <div class="details-nav"></div>
                            <h5><a href="http://www.vice.com/read/LARP-harder" target="_blank">Read the story</a></h5>
                        </div>
                    </div>
                </div>

                <!--                Patients Last-->
                <div class="wd-content-holder">
                    <div class="overlay-text" id="pl-overlay-txt">Patients Last<br>
                        <div class="overlay-subhed">Jacobin Magazine</div>
                    </div>

                    <div class="wd-content-box blur" id="wd-content-box-pl">
                        <div class="site-thumb">
                            <div class="overlay">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="wd-detail-box row" id="detail-box-pl">
                        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="description col-lg-push-2 col-lg-4">
                            A chronicle of a hospital conglomerate's long-running fight with its employees' union
                        </div>
                        <div class="details col-lg-4 col-lg-push-6">
                            <div class="details-inner d-1">
                                <h4>Details</h4>
                                <div class="details-txt">
                                    Reporting this story involved delving deep into a series of legal files describing the various lawsuits between Prime Healthcare and the unions representing its employees.
                                </div>
                            </div>
                            <div class="details-nav"></div>
                            <h5><a href="https://www.jacobinmag.com/2014/09/patients-last/" target="_blank">Read the story</a></h5>
                        </div>
                    </div>
                </div>

                <!--               Wanderer-->
                <div class="wd-content-holder">
                    <div class="overlay-text" id="sh-overlay-txt"> 'Wanderer'<br>
                        <div class="overlay-subhed">Tin House Magazine</div>
                    </div>

                    <div class="wd-content-box" id="wd-content-box-sh">
                        <div class="site-thumb">
                            <div class="overlay">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="wd-detail-box row" id="detail-box-sh">
                        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="description col-lg-push-2 col-lg-4">
                            An essay about the life and writing of actor, sailor, and adventurer Sterling Hayden
                        </div>
                        <div class="details col-lg-4 col-lg-push-6">
                            <div class="details-inner d-1">
                                <h4>Details</h4>
                                <div class="details-txt">
                                    I learned about Sterling Hayden from his performance in 'The Godfather' and was excited to discover that his life and writing were often so outlandish as to put fiction to shame.
                                </div>
                            </div>
                            <div class="details-nav"></div>
                            <h5><a href="http://www.tinhouse.com/blog/42334/lost-found-shane-danaher-on-sterling-hayden.html" target="_blank">Read the story</a></h5>
                        </div>
                    </div>
                </div>


                <!--               Lost in Space-->
                <div class="wd-content-holder">
                    <div class="overlay-text" id="jr-overlay-txt"> Lost In Space<br>
                        <div class="overlay-subhed">Portland Monthly Magazine</div>
                    </div>

                    <div class="wd-content-box blur" id="wd-content-box-jr">
                        <div class="site-thumb">
                            <div class="overlay">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="wd-detail-box row" id="detail-box-jr">
                        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="description col-lg-push-2 col-lg-4">
                            A profile of the novelist and screenwriter Jon Raymond
                        </div>
                        <div class="details col-lg-4 col-lg-push-6">
                            <div class="details-inner d-1">
                                <h4>Details</h4>
                                <div class="details-txt">
                                    In the course of profiling Jon, I got the opportunity to talk to some of my favorite film directors as well, which was a real treat.
                                </div>
                            </div>
                            <div class="details-nav"></div>
                            <h5><a href="https://www.pdxmonthly.com/articles/2012/4/27/jon-raymond-lost-in-space-may-2012" target="_blank">Read the story</a></h5>
                        </div>
                    </div>
                </div>

                <!--           Finding God in the Game-->
                <div class="wd-content-holder">
                    <div class="overlay-text" id="gg-overlay-txt"> God in the Game <br>
                        <div class="overlay-subhed">Willamette Week</div>
                    </div>

                    <div class="wd-content-box blur" id="wd-content-box-gg">
                        <div class="site-thumb">
                            <div class="overlay">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="wd-detail-box row" id="detail-box-gg">
                        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="description col-lg-push-2 col-lg-4">
                            A profile of hip-hop A&amp;R man turned pentecostal preacher Cole Brown
                        </div>
                        <div class="details col-lg-4 col-lg-push-6">
                            <div class="details-inner d-1">
                                <h4>Details</h4>
                                <div class="details-txt">
                                    A passionate hip-hop fan in his youth, Cole Brown began career as a successful label hand, only to abandon that line of work for the life of a storefront preacher in Portland, Oregon, where I met him.
                                </div>
                            </div>
                            <div class="details-nav"></div>
                            <h5><a href="http://www.wweek.com/portland/article-19357-finding-god-in-the-game.html" target="_blank">Read the story</a></h5>
                        </div>
                    </div>
                </div>

                <!--           Sallie Mae-->
                <div class="wd-content-holder">
                    <div class="overlay-text" id="sm-overlay-txt"> Student Loans<br>
                        <div class="overlay-subhed">VICE Magazine</div>
                    </div>

                    <div class="wd-content-box blur" id="wd-content-box-sm">
                        <div class="site-thumb">
                            <div class="overlay">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="wd-detail-box row" id="detail-box-sm">
                        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="description col-lg-push-2 col-lg-4">
                            A concise guide on how to pay your student loans without actually paying them
                        </div>
                        <div class="details col-lg-4 col-lg-push-6">
                            <div class="details-inner d-1">
                                <h4>Details</h4>
                                <div class="details-txt">
                                    Despite the end of the recession, this article remains worthwhile reading for the aspiring dirtbag.
                                </div>
                            </div>
                            <div class="details-nav"></div>
                            <h5><a href="http://www.vice.com/read/how-to-pay-your-student-loans-without-actually-paying-them" target="_blank">Read the story</a></h5>
                        </div>
                    </div>
                </div>

            </div>

            <!--        Audio-->
            <div class="creative-container a">

                <!--            Fordham podcast-->
                <div class="wd-content-holder">
                    <div class="overlay-text" id="oc-overlay-txt">In Open Country<br>
                        <div class="overlay-subhed">Podcast for Fordham University</div>
                    </div>

                    <div class="wd-content-box blur" id="wd-content-box-oc">
                        <div class="site-thumb">
                            <div class="overlay">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="wd-detail-box row" id="detail-box-oc">
                        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="description col-lg-push-2 col-lg-4">
                            A piece of audio journalism concerning efforts to help Central American refugees navigate the US asylum process
                        </div>
                        <div class="details col-lg-4 col-lg-push-6">
                            <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/324279787&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        </div>
                    </div>
                </div>

                <!--            Noods-->
                <div class="wd-content-holder">
                    <div class="overlay-text" id="no-overlay-txt">&nbsp;Noods
                        <br>
                        <div class="overlay-subhed">A rock band</div>
                    </div>

                    <div class="wd-content-box blur" id="wd-content-box-no">
                        <div class="site-thumb">
                            <div class="overlay">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="wd-detail-box row" id="detail-box-no">
                        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="description col-lg-push-2 col-lg-4">
                            Noods is a band for which I play drums and do some audio engineering
                        </div>
                        <div class="details col-lg-4 col-lg-push-6">
                            <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/308240788&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        </div>
                    </div>
                </div>

                <!--            Synth experiments-->
                <div class="wd-content-holder">
                    <div class="overlay-text" id="el-overlay-txt">Electronic leftovers
                        <br>
                        <div class="overlay-subhed">Various synthesizer experiments</div>
                    </div>

                    <div class="wd-content-box blur" id="wd-content-box-el">
                        <div class="site-thumb">
                            <div class="overlay">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="wd-detail-box row" id="detail-box-el">
                        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="description col-lg-push-2 col-lg-4">
                            Leftovers and doodles from time spent playing with audio equipment
                        </div>
                        <div class="details col-lg-4 col-lg-push-6">
                            <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/244826635&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <!--    CV-->
        <div id="resume" class="chunk" data-background="#C2B2DF">
            <h2>Arguments for Myself</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-lg-push-4 pic">
                        <picture>
                            <source media="(max-width: 770px)" srcset="assets/sd-md.jpg">
                            <source media="(max-width: 375px)" srcset="assets/sd-sm.jpg">
                            <img src="assets/sd.jpg" alt="Shane's face" id="profile-pic">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-lg-push-4">
                        <ul class="social-icons">
                            <li>
                                <a href="mailto:toofarm@gmail.com" target="">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                        </a>
                                <li>
                                    <a href="https://www.linkedin.com/in/shaners/" target="_blank">
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/toofarm" target="_blank">
                                <i class="fa fa-github-square" aria-hidden="true"></i>
                            </a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-lg-push-2 tech">
                    <h5>Technologies</h5>
                        <ul class="tech-content">
                            <li>ReactJS</li>
                            <li>VueJS</li>
                            <li>Node.js</li>
                            <li>JavaScript (ES6+)</li>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>PHP7</li>
                            <li>SASS</li>
                            <li>jQuery</li>
                            <li>MySQL</li>
                        </ul>
                        <h6>Tools and environments</h6>
                        <ul class="tech-content">
                            <li>WordPress</li>
                            <li>Bootstrap</li>
                            <li>WebPack/NPM</li>
                            <li>Adobe Creative Suite</li>
                            <li>GitHub</li>
                            <li>GitBash</li>
                            <li>Google Analytics</li>
                            <li>Google Tag Manager</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-lg-push-2 exp">
                        <h5>Experience</h5>
                        <h6><a href="https://3qdigital.com/" target="_blank">3Q Digital</a></h6>
                        <div class="exp-summary">I build web applications and provide marketing technology support for multiple clients in my work for this stellar digital marketing agency.</div>
                        <div class="exp-tech">VueJS, ReactJS, Node.js, Javascript, Google Tag Manager, CSS, HTML</div>

                        <h6><a href="https://816nyc.com/" target="_blank">816 New York</a></h6>
                        <div class="exp-summary">For this fine digital marketing agency, I helped build and maintain a variety of Wordpress-based websites.</div>
                        <div class="exp-tech">Wordpress, PHP, Javascript, CSS, HTML</div>
                        
                        <h6><a href="https://upchieve.org/" target="_blank">UPchieve</a></h6>
                        <div class="exp-summary">I contributed development work to this on-demand web tutoring application on a volunteer basis.</div>
                        <div class="exp-tech">VueJS, Node.js, Javascript, CSS, HTML</div>
                        
                        <h6><a href="https://www.rodalebooks.com/" target="_blank">Rodale Press</a></h6>
                        <div class="exp-summary">At Rodale, a publishing house specializing in health and wellness titles, I performed development work on the company's b-to-b sales website.</div>
                        <div class="exp-tech">WordPress, CSS, PHP, HTML, Adobe Creative Suite</div>

                        <h6><a href="https://rxart.net/" target="_blank">Rx Art</a></h6>
                        <div class="exp-summary">I volunteered at Rx Art, an arts nonprofit that places artworks in children's hospitals, to make several modifications to their Wordpress-based web presence.</div>
                        <div class="exp-tech">WordPress, CSS, PHP, HTML, JavaScript</div>


                    </div>
                </div>
            </div>


        </div>

        <!--    Cat footer-->
        <footer class="container-cat">
            <div class="cat">
            </div>
            <div class="overlay-cat">
                <div class="overlay-cat-txt">
                    <a href="#greeting-meta-container">– Back to top –</a>
                </div>
                <div class="cat-footer">
                    Thanks for visiting <br><br> Shane Danaher &copy;2017
                </div>
            </div>
        </footer>
    </div>

    <script src="js/core-animations.min.js"></script>
</body>


</html>
