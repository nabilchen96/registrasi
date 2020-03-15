<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="imgs/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SuSan - App Landing Page</title>

        <!-- Icon css link -->
        <link href="vendores/themify-icon/themify-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="vendores/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="csss/bootstrap.min.css" rel="stylesheet">

        <!-- <link rel="stylesheet" href="../csss/style.css"> -->
        
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
                            <li><a href="registrasi.html">Registrasi</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================Slider Area =================-->
        
        
        <!--================Slider Area =================-->
      
       
        <section class="map_area" id="contact">
            <div class="contact_info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact_form_left">
                                <div class="row">
                                    <h1>Registrasi</h1>
                                    <br>
                                    <div class="">
                                        <ul class="nav nav-tabs">
                                          <li class="active"><a href="#tab_1" data-toggle="tab">Daftar Perorangan</a></li>
                                          <li><a href="#tab_2" data-toggle="tab">Daftar Kemitraan</a></li>
                                        </ul>
                                        <br>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <form class="comment_form_inner" action="{{ url('/register') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="role" value="perorangan">
                                                    <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                                        <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Full Name">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Email">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="subject"  placeholder="No Hp">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control"  id="message" rows="1" name="alamat" placeholder="Alamat"></textarea>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <button class="btn btn-default submit_btn" type="submit">Daftar</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab_2">
                                                <form class="comment_form_inner" action="{{ url('/register') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="role" value="perusahaan">
                                                    <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                                        <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Nama Perusahaan">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Email Perusahaan">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="subject"  placeholder="No Telpon">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control"  id="message" rows="1" name="alamat" placeholder="Alamat Perusahaan"></textarea>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <button class="btn btn-default submit_btn" type="submit">Daftar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact_details">
                                <div class="signup-image">
                                    <figure><img width="100%" src="imgs/signup-image.jpg" alt="sing up image"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
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