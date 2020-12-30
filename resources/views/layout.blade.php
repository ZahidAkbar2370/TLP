<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | TLP</title> 

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <![endif]-->       
    <link rel="shortcut icon" href="{{URL::to('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                     @if(!empty($all_socialmedia))
                    @foreach($all_socialmedia as $socialmedia)
                    <div class="col-sm-6">
                      
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i>03000000001</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>tlp@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://{{$socialmedia->socialmedia_facebook}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://{{$socialmedia->socialmedia_twitter}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://{{$socialmedia->socialmedia_linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://{{$socialmedia->socialmedia_website}}"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="https://{{$socialmedia->socialmedia_whatsapp}}"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="home"><img src="logo.jpg" height="50" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                
                            </div>
                            
                            <div class="btn-group">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="home" class="active"><i class="fa"></i> Home</a></li>
                                <li><a href="khtmynabuwat"><i class="fa"></i> Khtmynabuwat</a></li>
                                <li><a href="sunnatpak"><i class="fa "></i> Sunnat Pak</a></li>
                                <li><a href="video"><i class="fa "></i>Videos</a></li>
                                <li><a href="gallary"><i class="fa "></i>Gallary</a></li>
                                <li><a href="tarana"><i class="fa "></i>Tarana</a></li>
                                <li><a href="contactus"><i class="fa "></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
     
    @yield('contents')
   
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="companyinfo">
                            <h2><span>Tehreek-e-Labbaik Pakistan</span></h2>
                        </div>
                    </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>About TLP</h2>
                            <ul class="nav nav-pills nav-stacked" style="text-align: justify;">
                                <p>Tehreek-e-Labbaik Pakistan, is a far-right Islamist political party in Pakistan. The party was founded by preacher Khadim Hussain Rizvi. The TLP is known for its countrywide street power and massive protests in opposition to any change to Pakistan's</p>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget" style="margin-left: 40px">
                            <h2>Quick Links</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="home">Home</a></li>
                                <li><a href="khtmynabuwat">Khtmynabuwat</a></li>
                                <li><a href="sunnatpak">Sunnatpak</a></li>
                                <li><a href="video">Videos</a></li>
                                <li><a href="gallary">Gallery</a></li>
                                <li><a href="tarana">Tarana</a></li>
                                 <li><a href="contactus">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Official Accounts</h2>
                            <ul class="nav nav-pills nav-stacked">
                                @foreach($all_socialmedia as $socialmedia)
                                <li><a href="{{ $socialmedia->socialmedia_facebook }}">Facebook</a></li>
                                <li><a href="{{ $socialmedia->socialmedia_twitter }}">Twitter</a></li>
                                <li><a href="{{ $socialmedia->socialmedia_linkedin }}">Linkedin</a></li>
                                <li><a href="{{ $socialmedia->socialmedia_whatsapp }}">Whatsapp</a></li>
                                <li><a href="{{ $socialmedia->socialmedia_website }}">Website</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Contact Info</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li>03000000001</li>
                                <li>tlp@gmail.com</li>
                                <li>05178778932</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2020 TLP. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="#">Zahid Akbar Jakhar</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>