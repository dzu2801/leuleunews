<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{config('app.name','LeuLeu News')}}</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" />
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" />
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=1880584012162103&autoLogAppEvents=1"></script>
</head>
<body class="theme-blue">

    <div class="site">

        <!--Start Header-->
       @include('layout.inc.headerContainer')

        <!--End header-->
        <!--Start Breaking-->
        @include('layout.inc.breacking')
        <!--End Breaking-->
        <!--Featured post 1 POST dau giao dien khac, max 5 bai viet-->
        {{-- @include('layout.inc.featured') --}}
        @yield('Featurde')
        <!--End Featured post-->

        <!--Content-->
        <div class="custom-container">

            <!--Start row-->
            @yield('content')
            <!--End row-->
            <!--End Row-->

        </div>
        <!--End Content-->

        <!--Start Footer-->
        <footer class="tz-footer">
            <div class="container footer-content">
                <div class="row">

                    <!--Footer one-->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget_title">About Us</h4>
                            <div class="widget_about">
                                <h2>{{config('app.name')}}</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium doloremque laudantium, totam rem aperiam, </p>
                                <ul class="widget_about_meta">
                                    <li>
                                        <address>
                                            586/3 Quốc lộ 13 , Hiệp Bình Phước , Thủ Đức , TP. Hồ Chính Minh
                                        </address>
                                    </li>
                                    <li>
                                        0870 241 3300
                                    </li>
                                    <li>
                                        <a href="#">support@leuleu.net</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Footer one-->

                    <!--Footer Two-->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget recent_post">
                            <h4 class="widget_title">Recent Posts</h4>
                            <ul>
                                <li>
                                    <div class="recent-image">
                                        <a href="single-blog.html">
                                            <img src="images/data/post1-replace.png" alt="Travelling with kids on a Queensland’s">
                                        </a>
                                    </div>
                                    <h5><a href="single-blog.html">Travelling with kids on a Queensland’s</a></h5>
                                    <span class="recent-meta">
                                        by <a href="page-blog.html">Doe /</a> 12 April 2015
                                    </span>
                                </li>
                                <li>
                                    <div class="recent-image">
                                        <a href="single-blog.html">
                                            <img src="images/data/post1-replace.png" alt="Travelling with kids on a Queensland’s">
                                        </a>
                                    </div>
                                    <h5><a href="single-blog.html">Travelling with kids on a Queensland’s</a></h5>
                                    <span class="recent-meta">
                                        by <a href="page-blog.html">Doe /</a> 12 April 2015
                                    </span>
                                </li>
                                <li>
                                    <div class="recent-image">
                                        <a href="single-blog.html">
                                            <img src="images/data/post1-replace.png" alt="Travelling with kids on a Queensland’s">
                                        </a>
                                    </div>
                                    <h5><a href="single-blog.html">Travelling with kids on a Queensland’s</a></h5>
                                    <span class="recent-meta">
                                        by <a href="page-blog.html">Doe /</a> 12 April 2015
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer two-->

                    <!--Footer Three-->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget_title">Last tweets</h4>
                            <ul class="twitter_list">
                                <li class="twitter-item">
                                    <i class="fa fa-twitter twitter-icon"></i>
                                    <div class="twitter-content">
                                        <a href="//twitter.com/rhettsoveran" class="twitter-user">@SedTeam</a>
                                        ut perspiciatis unde omnis iste natus error sit vol <a href="#">http://co.nz</a>
                                    </div>
                                </li>
                                <li class="twitter-item">
                                    <i class="fa fa-twitter twitter-icon"></i>
                                    <div class="twitter-content">
                                        The Mathematical Symphony of Typoy As it turns out, this is omg. Deserunt posuere pellentesque porta ridiculus fugiat.
                                    </div>
                                </li>
                                <li class="twitter-item">
                                    <i class="fa fa-twitter twitter-icon"></i>
                                    <div class="twitter-content">
                                        <a href="//twitter.com/rhettsoveran" class="twitter-user">@SedTeam</a>
                                        ut perspiciatis unde omnis iste natus error sit vol <a href="#">http://co.nz</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer three-->

                    <!--Footer four-->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget_menu">
                            <h4 class="widget_title">Information</h4>
                            <ul>
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="index.html">Overview LifeMag</a>
                                </li>
                                <li>
                                    <a href="index.html">All about Our Team</a>
                                </li>
                                <li>
                                    <a href="index.html">Innovation</a>
                                </li>
                                <li>
                                    <a href="index.html">Testimonials</a>
                                </li>
                                <li>
                                    <a href="index.html">Project</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer four-->

                </div>
            </div>

            <div class="tz-copyright">
                <div class="container">
                    <p class="pull-left copyright-content">&copy; Copyrights 2015 TemPlaza, Inc. All rights reserved.</p>
                    <ul class="pull-right footer-social">
                        <li>
                            <a href="#"><i  class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--End Footer-->

    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/theia-sticky-sidebar.js')}}"></script>
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>


</body>
</html>