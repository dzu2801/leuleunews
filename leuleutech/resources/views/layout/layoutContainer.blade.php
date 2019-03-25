
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{config('app.name','LeuLeu News')}}</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="theme-blue">

    <div class="site">

        <!--Start Header-->
       @include('layout.inc.headerContainer')

        <!--End header-->
        <!--Start Breaking-->
        @include('layout.inc.breacking')
        <!--End Breaking-->
        @yield('content')
        <!--Featured post 1 POST dau giao dien khac, max 5 bai viet-->
        @include('layout.inc.featured')
        <!--End Featured post-->

        <!--Content-->
        <div class="custom-container">

            <!--Start row-->
            <div class="row border-bottom2">

                <!--Content left-->
                <div class="col-md-8 col-sm-8 style-box1 tzcontent">

                    <!--Wrap element SMARTPHONES-->
                        @include('layout.inc.elementSmartPhone')
                    <!--End Wrap element SMARTPHONE-->

                    <!--Wrap element Cars And Motos-->
                        @include('layout.inc.elementCarsMotos')
                    <!--End Wrap element-->

                    <!--Wrap element Laptops-->
                        @include('layout.inc.elementLaptop')
                    <!--End Wrap element Laptop-->

                </div>
                <!--End Content left-->

                <!--Content right-->
                @include('layout.inc.contentHotNews')
                <!--End Content right-->

            </div>
            <!--End row-->


            <div class="row">
                <div class="col-md-12">
                    <div class="tz-box-cat-slider">
                        <!--Slider post-->
                        <div class="slider-post-wrap">

                            <ul class="slider-post slider-post3">
                                <li>
                                    <div class="item-thumbnail-wrap">
                                        <div class="tz-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="images/data/image-demo/370x248.png" alt="The 20 free things in Sydney with my girlfriend">
                                            </a>

                                            <div class="tz-infomation">
                                                <a class="blue-dark cat_name" href="page-blog.html">ELECTRIC</a>
                                                <h3 class="tz-post-title"><a href="single-blog.html">The 20 free things in Sydney with my girlfriend</a></h3>
                                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-thumbnail-wrap">
                                        <div class="tz-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="images/data/image-demo/370x248.png" alt="The 20 free things in Sydney with my girlfriend">
                                            </a>
                                            <div class="tz-infomation">
                                                <a class="blue-light cat_name" href="page-blog.html">ELECTRIC</a>
                                                <h3 class="tz-post-title"><a href="single-blog.html">The 20 free things in Sydney with my girlfriend</a></h3>
                                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-thumbnail-wrap">
                                        <div class="tz-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="images/data/image-demo/370x248.png" alt="The 20 free things in Sydney with my girlfriend">
                                            </a>
                                            <div class="tz-infomation">
                                                <a class="gold cat_name" href="page-blog.html">ELECTRIC</a>
                                                <h3 class="tz-post-title"><a href="single-blog.html">The 20 free things in Sydney with my girlfriend</a></h3>
                                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-thumbnail-wrap">
                                        <div class="tz-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="images/data/image-demo/370x248.png" alt="The 20 free things in Sydney with my girlfriend">
                                            </a>
                                            <div class="tz-infomation">
                                                <a class="blue-light cat_name" href="page-blog.html">ELECTRIC</a>
                                                <h3 class="tz-post-title"><a href="single-blog.html">The 20 free things in Sydney with my girlfriend</a></h3>
                                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <!--Start contro-->
                            <div class="slider-contro  pull-right">
                                <button class="tz-button-prev contro-style2 prev-post">
                                    <i class="fa fa-angle-left"></i>
                                </button>
                                <button class="tz-button-next contro-style2 next-post">
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </div>
                            <!--End start contro-->

                        </div>
                        <!--End slider post-->
                    </div>
                </div>
            </div>

            <!--Start Row chứa bài viết về thiêt bị số-->
            <div class="row">
                <div class="col-md-8 col-sm-8 style-box1 tzcontent">

                    <!--Start Box thiết bị số-->
                 @include('layout.inc.elementElectronicDevices')
                    <!--End Box thiết bị số-->
                </div>

                <!--Left-->
                <div class="col-md-4 col-sm-4 remove-padding tzsidebar">
                    <div class="tz-element margin-top12">
                        <div class="tz-photos">
                            <div class="tz-title-filter">
                                <h3 class="tz-title">
                                    <span>LIFE NEWS</span>
                                </h3>
                                <div class="tz-cat-filter">
                                    <span>All</span>
                                </div>
                            </div>
                            <ul class="tz-post-photos">
                                <li>
                                    <a href="single-blog.html">
                                        <img src="images/data/image-demo/110x110.png" alt="photo one">
                                    </a>
                                </li>
                                <li>
                                    <a href="single-blog.html">
                                        <img src="images/data/image-demo/110x110.png" alt="photo one">
                                    </a>
                                </li>
                                <li>
                                    <a href="single-blog.html">
                                        <img src="images/data/image-demo/110x110.png" alt="photo one">
                                    </a>
                                </li>
                                <li>
                                    <a href="single-blog.html">
                                        <img src="images/data/image-demo/110x110.png" alt="photo one">
                                    </a>
                                </li>
                                <li>
                                    <a href="single-blog.html">
                                        <img src="images/data/image-demo/110x110.png" alt="photo one">
                                    </a>
                                </li>
                                <li>
                                    <a href="single-blog.html">
                                        <img src="images/data/image-demo/110x110.png" alt="photo one">
                                    </a>
                                </li>
                                <li>
                                    <a href="single-blog.html">
                                        <img src="images/data/image-demo/110x110.png" alt="photo one">
                                    </a>
                                </li>
                                <li>
                                    <a href="single-blog.html">
                                        <img src="images/data/image-demo/110x110.png" alt="photo one">
                                    </a>
                                </li>
                                <li>
                                    <a href="single-blog.html">
                                        <img src="images/data/image-demo/110x110.png" alt="photo one">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tz-element border-top">
                        <div class="abs">
                            <a href="#"><img src="images/data/image-demo/336x280.png" alt="ads3"></a>
                        </div>
                    </div>
                </div>
                <!--End Left-->

            </div>
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
                                <h2>LifeMag</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium doloremque laudantium, totam rem aperiam, </p>
                                <ul class="widget_about_meta">
                                    <li>
                                        <address>
                                            122 Baker St, Marylebone London, W1U 6TX
                                        </address>
                                    </li>
                                    <li>
                                        0870 241 3300
                                    </li>
                                    <li>
                                        <a href="#">support@theme.com</a>
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

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theia-sticky-sidebar.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/custom.js"></script>


</body>
</html>