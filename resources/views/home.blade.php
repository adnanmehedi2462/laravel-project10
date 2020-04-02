<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adnan,s cyber station</title>
      <link rel="icon" type="image/png" href="{{URL::asset('public/login/images/icons/f.png')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('public/home/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('public/home/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('public/home/css/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('public/home/css/flexslider.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('public/home/fonts/flaticon/font/flaticon.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('public/home/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/home/css/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('public/home/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('public/home/js/modernizr-2.6.2.min.js')}}"></script>



    <!-- protfollio -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script src="https://mixitup.kunkalabs.com/wp-content/themes/mixitup.kunkalabs/js/main.min.js?ver=1.3.1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->


    </head>
    <body>
    <div id="colorlib-page">
        <div class="container-wrap">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
            <div class="text-center">
                <div class="colorlib-footer" style="margin-top: -30px;padding-bottom: 15px;">
        
                <ul>
                    <li><a href="#" style="color: #3b5999;"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#" style="color: #55acee;"><i class="icon-twitter2"></i></a></li>
                    <li><a href="#" style="color:#e4405f;"><i class="icon-instagram"></i></a></li>
                    <li><a href="#" style="color: #0077B5;"><i class="icon-linkedin2"></i></a></li>
                </ul>
            </div>
    @php

    $edit_info = DB::table('infophotos')->orderBy('id', 'desc')
    ->limit(1)
    ->get();

     @endphp
     @foreach($edit_info as $edit_infos)

                <div class="author-img" style="background-image:url({{url($edit_infos->photo)}})
                 "> </div>

    @endforeach
                <h1 id="colorlib-logo"><a href="index.html">Adnan Mahdi</a></h1>
                <span class="position"><div class="type-wrap" style="margin-top: -30px;t"><!-- add static words/sentences here (i.e. text that you don't want to be removed)-->
                  <span id="typed" style="white-space:pre; font-size: 17px; background-color: black;color: #fff;padding: 10px;" class="typed">
                  </span>
                </div></span>
            </div>
            

                <script type="text/javascript">  
    $("#typed").typed({
        strings: ["Im web Designer .", "Web Developer", "  Application Developer."],
        typeSpeed: 100,
        startDelay: 0,
        backSpeed: 60,
        backDelay: 2000,
        loop: true,
        cursorChar: "|",
        contentType: 'html'
    });</script>
            <nav id="colorlib-main-menu" role="navigation" class="navbar">

         



                <div id="navbar" class="collapse">
                    <ul>
                        <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                        <li><a href="#" data-nav-section="about">About</a></li>
                        <li><a href="#" data-nav-section="services">Services</a></li>
                        <li><a href="#" data-nav-section="skills">Skills</a></li>
                        <li><a href="#" data-nav-section="education">Education</a></li>
                        <li><a href="#" data-nav-section="experience">Experience</a></li>
                        <li><a href="#" data-nav-section="work">Work</a></li>
                        <li><a href="#" data-nav-section="blog">Blog</a></li>
                        <li><a href="#" data-nav-section="contact">Contact</a></li>
                    </ul>
                </div>
            </nav>

        </aside>
        @php
        $slids=DB::table("sliders")->orderBy('id', 'desc')
    ->limit(1)
    ->get();
        @endphp
         @php
    $cvss=DB::table("cvs")->orderBy('id', 'desc')
    ->limit(1)
    ->get();
        @endphp


        <div id="colorlib-main">
            <section id="colorlib-hero" class="js-fullheight" data-section="home">
                <div class="flexslider js-fullheight">
                    <ul class="slides">
                        @foreach($slids as $row)
                    <li style="background-image:url({{url($row->photo)}}); background-position: center center; position: relative;" >
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner js-fullheight">
                                        <div class="desc1" style="background-image:url({{URL::asset('public/home/images/cccc.png')}}) ;background-position: left;">
                                            <h1>Hi!  <br>{{$row->about}}</h1>
                                            <h2>{{$row->about_two}}</h2>
                                            @foreach($cvss as $rows)
                                                <p><a href="{{url($rows->cv)}}" class="btn btn-primary btn-learn">{{$rows->title}}<i class="icon-download4"></i></a></p>
                                                @endforeach

                                            </div>


                                    </div>

                                </div>
                                
                            </div>

                        </div>
                    </li>
                    @endforeach
                    @php
                    $second_slids=DB::table("second_sliders")->orderBy('id', 'desc')
                    ->limit(1)
                    ->get();
                    @endphp



                   @foreach($second_slids as $rows)
                    <li style="background-image: url({{url($rows->photo)}});background-position: center center; position: relative;">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc2" style="background-image: url({{URL::asset('public/home/images/cccc.png')}});background-position: left;" >
                                            <h1>I am <br>{{$rows->about}}</h1>
                                                </h2>
                                                     @foreach($cvss as $rows)
                                                <p><a  href="{{url($rows->cv)}}"
                                                 class="btn btn-primary btn-learn">{{$rows->title}}<i class="icon-download4"></i></a></p>
                                                @endforeach
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    </ul>
                </div>
            </section>


            <section class="colorlib-about" data-section="about">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="col-md-12">
                                    <div class="about-desc">
                                        <span class="heading-meta">About Us</span>
                                        <h2 class="colorlib-heading">Who Am I?</h2>
                                        <p><strong>Hi I'm Adnan Mahdi</strong>Im a web and application developer.I'm a freelancer. I have been working as a Web and Application Developer over the last 4 years. I used to work on fiverr .</p>
                                        <p> Moreover,Sometimes I work for different companies,as a Web and Application developer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="services color-1">
                                        <span class="icon2"><i class="icon-bulb"></i></span>
                                        <h3>Graphic Design</h3>
                                    </div>
                                </div>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                    <div class="services color-2">
                                        <span class="icon2"><i class="icon-globe-outline"></i></span>
                                        <h3>Web Design&Dev. </h3>
                                    </div>
                                </div>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                                    <div class="services color-3">
                                        <span class="icon2"><i class="icon-data"></i></span>
                                        <h3>Software</h3>
                                    </div>
                                </div>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
                                    <div class="services color-4">
                                        <span class="icon2"><i class="icon-phone3"></i></span>
                                        <h3>Web Application</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="hire">
                                        <h2>I am happy to know you <br>that 250+ projects done sucessfully!</h2>
                                        <a href="#con"class="btn-hire">Hire me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            
            <section class="colorlib-services" data-section="services">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">What I do?</span>
                            <h2 class="colorlib-heading">Here are some of my expertise</h2>
                        </div>
                    </div>
                    <div class="row row-pt-md">
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-1">
                                <span class="icon">
                                    <i class="icon-bulb"></i>
                                </span>
                                <div class="desc">
                                    <h3>Innovative Ideas</h3>
                                    <p>Innovation ideas are very important in programming and I am very aware of this</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-2">
                                <span class="icon">
                                    <i class="icon-data"></i>
                                </span>
                                <div class="desc">
                                    <h3>Software</h3>
                                    <p>I always try to create new software.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-3">
                                <span class="icon">
                                    <i class="icon-phone3"></i>
                                </span>
                                <div class="desc">
                                    <h3>Application</h3>
                                    <p>I created some mobile apps using Dart Programming Language.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-4">
                                <span class="icon">
                                    <i class="icon-layers2"></i>
                                </span>
                                <div class="desc">
                                    <h3>Graphic Design</h3>
                                    <p>I do most of the graphic,s project using Illustrator..So i try to use it well..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-5">
                                <span class="icon">
                                    <i class="icon-data"></i>
                                </span>
                                <div class="desc">
                                    <h3>Database</h3>
                                    <p>Database is very importent for all the projects at Development level.So i try to use it well. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services color-6">
                                <span class="icon">
                                    <i class="icon-phone3"></i>
                                </span>
                                <div class="desc">
                                    <h3>Web Application</h3>
                                    <p>In some cases web applications are very importent, such a (P.O.S) system..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{URL::asset('public/home/images/cover_bg_1.jpg')}});" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="colorlib-narrow-content">
                    <div class="row">
                    </div>
                    <div class="row">
                    <!--    <div class="col-md-3 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Cups of coffee</span>
                        </div> -->
                        <div class="col-md-4 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="276" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Projects</span>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="34" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Clients</span>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="6" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Partners</span>
                        </div>
                    </div>
                </div>
            </div>

            <section class="colorlib-skills" data-section="skills">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">My Specialty</span>
                            <h2 class="colorlib-heading animate-box">My Skills</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <p>Here are all My skills........</p>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>Photoshop</h3>
                                <div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                    <span>75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>jQuery& Vuejs</h3>
                                <div class="progress">
                                    <div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    <span>60%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>HTML5</h3>
                                <div class="progress">
                                    <div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                    <span>95%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>CSS3</h3>
                                <div class="progress">
                                    <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    <span>90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>PHP</h3>
                                <div class="progress">
                                    <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    <span>70%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>LARAVEL</h3>
                                <div class="progress">
                                    <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    <span>80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-education" data-section="education">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Education</span>
                            <h2 class="colorlib-heading animate-box">Education</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="fancy-collapse-panel">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor Degree of Computer Science
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                               <span class="heading-meta" style="font-size: 13px;">WORLD UNIVERSITY OF BANGLADESH</span>
                                               <p >I am studying at the World University of Bangladesh in  Computer Science Engineering Department.</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Diploma in Computer Science.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                  <span class="heading-meta" style="font-size: 13px;">Munshiganj Polytechnic Institut</span>

                                                <p>I completed Diploma in Computer Science from Munshiganj Polytechnic Institute(Gov.) in 2019.I got 3.7 cGPA.</p>  
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Web Design And Web Application development with Advance Laravel.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                  <span class="heading-meta" style="font-size: 13px;">R.R.F,BELANCER,&ADN EDU.SERVICES LTD.</span>
                                                <p>I was completed the web design in 2015 from the <b>R.R Foundation</b>.After that i was completed Web and Application Development from <b>Belancer
                                                </b> .. After all i completed Advance Laravel from <b>ADN EDU.SERVICES</b>
                                                <div class="Certification"><li><a href="#">Viwe Certification by Govt.</a></li>
                                                <li><a href="#">Viwe Certification by ADN.</a></li></div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-experience" data-section="experience">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Experience</span>
                            <h2 class="colorlib-heading animate-box">Work Experience</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                         <div class="timeline-centered">
                             <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                <div class="timeline-entry-inner">

                                   <div class="timeline-icon color-1">
                                      <i class="icon-pen2"></i>
                                   </div>

                                   <div class="timeline-label">
                                      <h2><a href="#">Full Stack Developer</a> <span>2014-2020</span></h2>
                                      <p> I am happy to know you
                                     that 250+ projects done sucessfully! All were development projects.My customers are happy with my work.Because I am very sincerely accomplishing my tasks.</p>
                                   </div>
                                </div>
                             </article>


                             <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                <div class="timeline-entry-inner">
                                   <div class="timeline-icon color-2">
                                      <i class="icon-pen2"></i>
                                   </div>
                                   <div class="timeline-label">
                                    <h2><a href="#">Front End Developer</a> <span>2014-2020</span></h2>
                                      <p>I do web development as well as responsive web design.And front End development. with <b>VUE.Js </b>It makes my web page run faster.</p>
                                   </div>
                                </div>
                             </article>

                             <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                <div class="timeline-entry-inner">
                                   <div class="timeline-icon color-3">
                                      <i class="icon-pen2"></i>
                                   </div>
                                   <div class="timeline-label">
                                    <h2><a href="#"> Laravel Fermwork</a> <span>2017-2020</span></h2>
                                      <p>Laravel is very popular in the web development context.And Its extremely powerful ,safe and fast.So that, i try to develope all my projects with the laravel framwork.I completed about 100 of the top websites with laravel</p>
                                   </div>
                                </div>
                             </article>

                             <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                <div class="timeline-entry-inner">
                                   <div class="timeline-icon color-4">
                                      <i class="icon-pen2"></i>
                                   </div>
                                   <div class="timeline-label">
                                    <h2><a href="#">Web Application Development</a> <span>2017-2020</span></h2>
                                      <p>Sometimes customers need to create web applications as needed. For example That could be the point of sale system(POS)</p>
                                   </div>
                                </div>
                             </article>

                           

                             <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                                <div class="timeline-entry-inner">
                                   <div class="timeline-icon color-none">
                                   </div>
                                </div>
                             </article>
                          </div>
                       </div>
                   </div>
                </div>
            </section>

            <section class="colorlib-work" data-section="work">
                <div class="colorlib-narrow-content">
                    <div class="row">

                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">My Work</span>
                            <h2 class="colorlib-heading animate-box">Recent Work</h2>
                        </div>
                    </div>
                    <div class="row">
                        
                
                            <ul id="filter-list" class="clearfix controls">

                      <button class="filter waves-effect waves-light btn animate-box" style="background-color:#16A1E7;" data-filter="all">All</button>
                      <button class="filter waves-effect waves-light btn animate-box" style="background-color:#16A1E7;" data-filter=".webdesign">Web Design</button>
                    
                      
                      <button class="filter waves-effect waves-light btn animate-box" style="background-color:#16A1E7;" data-filter=".illustration waves-effect waves-light btn">Illustration</button>
                     
                      <button class="filter waves-effect waves-light btn animate-box" style="background-color:#16A1E7;" data-filter=".photoshop">Photoshop</button>
                    </ul><!-- @end #filter-list -->     <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            
                        </div>
                              <ul id="portfolio">
                            <div class="col-md-4 animate-box">
                              <li class="mix logo photoshop">
                                <a href="project.php?id=1"><img src="{{URL::asset('public/home/images/p2.jpg')}}" alt="Dylans Digest Logo"></a><br><a href="project.php?id=1">
                                </a>
                            </li>

                            </div>
                            <div class="col-md-4 animate-box">
                              <li class="mix logo photoshop illustration">
                                <a href="project.php?id=2"><img src="{{URL::asset('public/home/images/p1.png')}}" alt="Alaska Coffee Roastery"></a><br><a href="project.php?id=2">
                                </a>
                            </li>
                            </div>
                            <div class="col-md-4 animate-box">
                              <li class="mix photoshop illustration">
                                <a href="project.php?id=3"><img src="{{URL::asset('public/home/images/ph.jpg')}}" alt="Mike's Harder Project"></a><br><a href="project.php?id=3">
                                </a>
                            </li>
                            </div>
                            
                        
                            <div class="col-md-4 animate-box">
                             <li class="mix animation webdesign">
                            <a href="project.php?id=9"><img src="{{URL::asset('public/home/images/a2.jpg')}}" alt="Adventures To Go Project"></a><br><a href="project.php?id=9"></a></li>
                          </div>
                          <div class="col-md-4 animate-box">
                             <li class="mix animation webdesign">
                            <a href="project.php?id=9"><img src="{{URL::asset('public/home/images/a1.jpg')}}" alt="Adventures To Go Project"></a><br><a href="project.php?id=9"></a></li>
                          </div>
                            <div class="col-md-4 animate-box">
                             <li class="mix animation webdesign">
                            <a href="project.php?id=9"><img src="{{URL::asset('public/home/images/a.jpg')}}" alt="Adventures To Go Project"></a><br><a href="project.php?id=9"></a></li>
                          </div>
                         
                         
                            </ul>
                            <!-- @end #portfolio -->
                            </div>
                            <!-- @end #w -->
            
                </div>
            </section>

            <section class="colorlib-blog" data-section="blog">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Read</span>
                            <h2 class="colorlib-heading">Recent Blog Coming Soon..</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="blog.html" class="blog-img"><img src="{{URL::asset('public/home/images/blog-1.jpg')}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="blog.html">Renovating National Gallery</a></h3>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="blog-entry">
                                <a href="blog.html" class="blog-img"><img src="{{URL::asset('public/home/images/laravel.png')}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="blog.html">Laravel for a Beginner</a></h3>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="blog.html" class="blog-img"><img src="{{URL::asset('public/home/images/li.png')}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="blog.html">Make website from scratch</a></h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                        </div>
                    </div>
                </div>
            </section>
            <div id="con">
            <section class="colorlib-contact" data-section="contact">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Get in Touch</span>
                            <h2 class="colorlib-heading">Contact</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-globe-outline"></i>
                                </div>
                                <div class="colorlib-text">
                                    <p><a href="mailto:adnanjohan54@gmail.com">adnanjohan54@gmail.com</a></p>
                                </div>
                            </div>

                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-map"></i>
                                </div>
                                <div class="colorlib-text">
                                    <p>Dhaka,Bangladesh.</p>
                                </div>
                            </div>

                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="colorlib-text">
                                    <a href="tel:+8801937383435" style="">+8801937383435</a>
                                </div>
                            </div>
                            <div class="colorlib-text">
                                    <a href="#" style="color: #fff">hi</a>
                                </div>
                        </div>
                        <div class="col-md-7 col-md-push-1">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                    <form action="" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        </div><!-- end:colorlib-main -->
    </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->

    <!-- jQuery -->
    <script src="{{asset('public/home/js/mix.js')}}"></script>

    <script src="{{asset('public/home/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('public/home/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/home/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('public/home/js/jquery.waypoints.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('public/home/js/jquery.flexslider-min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('public/home/js/owl.carousel.min.js')}}"></script>
    <!-- Counters -->
    <script src="{{asset('public/home/js/jquery.countTo.js')}}"></script>
    
    
    <!-- MAIN JS -->
    <script src="{{asset('public/home/js/main.js')}}"></script>
    <!-- protfollio -->


<script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script src="https://mixitup.kunkalabs.com/wp-content/themes/mixitup.kunkalabs/js/main.min.js?ver=1.3.1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    </body>
</html>

