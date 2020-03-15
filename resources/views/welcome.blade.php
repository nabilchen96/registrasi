<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="imgs/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SuSan - App Landing Page</title>

        <!-- Icon css link -->
        <link href="vendores/themify-icon/themify-icons.css" rel="stylesheet">
        <link href="csss/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('csss/solid.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('csss/light.css') }}">
        <link href="vendores/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="csss/bootstrap.min.css" rel="stylesheet">
        
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="vendores/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="vendores/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="vendores/revolution/css/settings.css">
        
        <!-- Extra plugin css -->
        <link href="vendores/animate-css/animate.css" rel="stylesheet">
        <link href="vendores/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <link href="csss/style.css" rel="stylesheet">
        <link href="csss/responsive.css" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        .main_menu_area .navbar-default {
            background: blue;
        }
        .slider_area .rev_slider ul li .register_angkar_btn {
            /* color: black; */
            border: 2px solid black;
            color: black;
        }
        </style>
    </head>
    <body>
       
        <!--================Slider Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="imgs/logo.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#layanan">Layanan</a></li>
                            <li><a href="{{ route('register') }}">Registrasi</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================Slider Area =================-->
        
        
        <!--================Slider Area =================-->
        <section class="slider_area" id="home">
            <div class="rev_slider fullwidthabanner"  data-version="5.3.0.2" id="main_slider">
                <ul> 
                    <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off" class="secand_slider">
                        <!-- MAIN IMAGE -->
                        <img src="http://trbu.rafahcuttindo.com/wp-content/uploads/2020/03/ross-parmly-rf6ywHVkrlY-unsplash-scaled.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="tp-caption first_text" 
                            style="color:black"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-voffset="['270','270','200']"
                            data-hoffset="['0','0','0']"
                            data-x="['left','left','left','left','30']" 
                            data-y="top"
                            data-fontsize="['36','36','25','20']" 
                            data-lineheight="['52','52','35','30']" 
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="800" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on">Discover great Apps, Games, <br /> Extensions & Plugin Showcase
                        </div>
                        <!-- LAYERS -->
                        <div class="tp-caption some_text" 
                            style="color:black"
                            data-width="['570','570','570','350']"
                            data-height="none"
                            data-whitespace="normal"
                            data-voffset="['400','400','300','285']"
                            data-hoffset="['0','0','0']"
                            data-x="['left','left','left','left','30']" 
                            data-y="top"
                            data-fontsize="['16','16','15']" 
                            data-lineheight="['26','26','26']"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="800" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ets nostrud exercitation ullamco.
                        </div>
                        <div class="tp-caption download_btn"
                            data-whitespace="nowrap"
                            data-voffset="['515','515','430']"
                            data-hoffset="['0','0','0']"
                            data-x="['left','left','left','left','30']" 
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
                            data-y="top"
                            data-start="1800" >
                            <a class="register_angkar_btn purple_s_btn" href="#price"><i class="lnr lnr-service"></i>Lihat Layanan</a>
                        </div>
                        <div class="tp-caption right_text" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="normal"
                            data-voffset="['150','110','110','0']"
                            data-hoffset="['0','0','0']"
                            data-x="right" 
                            data-y="['top','top','top','bottom']"
                            data-fontsize="['48']" 
                            data-lineheight="['55']" 
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="800" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on">
                            <div class="slider_shap">
                                <img src="imgs/header-slider/slider-m-shap.png" alt="">
                                <div class="slider_moblie owl-carousel">
                                    <div class="item">
                                        <img src="imgs/header-slider/slider-m-display-1.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="imgs/header-slider/slider-m-display-2.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="imgs/header-slider/slider-m-display-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul> 
            </div><!-- END REVOLUTION SLIDER -->
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Service Area =================-->
        
        <!--================End Service Area =================-->
        
        <!--================Feature Area =================-->
       
        <!--================End Feature Area =================-->
        
        <!--================Works Area =================-->
        
        <!--================End Works Area =================-->
        
        <!--================Screenshot Area =================-->
       
        <!--================End Screenshot Area =================-->
        
        <!--================Our Benefits Area =================-->
        
        <!--================End Our Benefits Area =================-->
        
        <!--================Clients Feedback Area =================-->
        
        <!--================End Clients Feedback Area =================-->
        
        <!--================Detail Area =================-->
        
        <!--================End Detail Area =================-->
        <section class="sponsors_area">
            <div class="container">
                <div class="sponsor_slider owl-carousel">
                    <div class="item">
                        <img src="imgs/sponsors/sponsors-1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="imgs/sponsors/sponsors-2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="imgs/sponsors/sponsors-3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="imgs/sponsors/sponsors-4.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        
        <!--================Pricing Area =================-->
        <section class="latest_blog_area" id="layanan">
            <div class="container">
               <div class="main_title">
                   <h2>Layanan Kami</h2>
               </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="latest_blog_item">
                            <center><h1>Pendidikan</h1></center>
                            <br>
                            <div class="l_blog_img">
                                <img width="100%" src="https://jdih.birohukum.sumbarprov.go.id/images/no-image.png" alt="">
                                <div class="l_blog_hover">
                                    <a href="#"><i class="lnr lnr-link"></i></a>
                                </div>
                            </div>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna sed accumsan... <a href="#">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest_blog_item">
                            <center><h1>Pelatihan</h1></center>
                            <br>
                            <div class="l_blog_img">
                                <img width="100%" src="https://jdih.birohukum.sumbarprov.go.id/images/no-image.png" alt="">
                                <div class="l_blog_hover">
                                    <a href="#"><i class="lnr lnr-link"></i></a>
                                </div>
                            </div>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna sed accumsan... <a href="#">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="latest_blog_item">
                            <center><h1>Penyewaan</h1></center>
                            <br>
                            <div class="l_blog_img">
                                <img width="100%" src="https://jdih.birohukum.sumbarprov.go.id/images/no-image.png" alt="">
                                <div class="l_blog_hover">
                                    <a href="#"><i class="lnr lnr-link"></i></a>
                                </div>
                            </div>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna sed accumsan... <a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Pricing Area =================-->
        
        <!--================Download Area =================-->
        
        <!--================End Download Area =================-->
        
        <!--================Subscrib Area =================-->
 
        <!--================End Subscrib Area =================-->
        
        <!--================Asked Question Area =================-->
        
        <!--================End Asked Question Area =================-->
        
        <!--================Expert Team Area =================-->

        <!--================End Expert Team Area =================-->
        
        <!--================Latest Blog Area =================-->

        <!--================End Latest Blog Area =================-->
        
        <!--================Sponsors Area =================-->
        
        <!--================End Sponsors Area =================-->
        
        <!--================Map Area =================-->
        <section class="map_area" id="contact">
            <div class="contact_info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact_form_left">
                                <div class="row">
                                    <form class="comment_form_inner" action="contact_process.php" method="post" id="contactForm">
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="btn btn-default submit_btn" type="submit">Send</button>
                                        </div>
                                    </form>
                                    <div id="success">
                                        <p>Your text message sent successfully!</p>
                                    </div>
                                    <div id="error">
                                        <p>Sorry! Message not sent. Something went wrong!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact_details">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Our Location</h4>
                                        <h5>Jl. Adi Sucipto No.3012, Sukodadi
                                            Kec. Sukarami, Palembang,
                                            Sumatera selatan 30961</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Call Us On</h4>
                                        <h5>(+1) 234 567 7890</h5>
                                        <h5>(+1) 234 567 7890</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Send Your Message</h4>
                                        <h5>backpiper.com@gmail.com</h5>
                                        <h5>admin@yourdomain.com</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Our Working Hours</h4>
                                        <h5>Mon-Fri 9.00AM to 5.00PM</h5>
                                    </div>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!--================End Map Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="container">
                <div class="pull-left">
                    <h4><p>Copyright @2018 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p> </h4>
                </div>
                <div class="pull-right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="jss/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="jss/bootstrap.min.js"></script>
        
        <script src="vendores/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendores/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!--RS5.0 Extensions-->
        <script src="vendores/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendores/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="vendores/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="vendores/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="vendores/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="vendores/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendores/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="vendores/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendores/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendores/owlcarousel/owl.carousel.min.js"></script>
        <script src="vendores/flipster/jquery.flipster.min.js"></script>
        <!-- contact js -->
        <script src="jss/jquery.form.js"></script>
        <script src="jss/jquery.validate.min.js"></script>
        <script src="jss/contact.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="jss/gmaps.min.js"></script>
        
        <script src="jss/video_player.js"></script>
        <script src="jss/theme.js"></script>
    </body>
</html>