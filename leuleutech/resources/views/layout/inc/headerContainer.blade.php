<header class="tz-header">

            <!--Start header top-->
            <div class="tz-header-top">
                <div class="container">

                    <!--Header top left-->
                    <div class="tz-header-top-left pull-left">
                        <div class="tz-data-time pull-left"><?php
                             date_default_timezone_set('Asia/Ho_Chi_Minh');
                             echo date('d/m/Y - H:i'); ?> </div>
                        <ul class="top-header-menu pull-left">
                            <li>
                                <a href="#" class="active"> SIGN IN / JOIN</a>
                            </li>
                            <li>
                                <a href="{{asset('/advertise')}}">ADVERTISE</a>
                            </li>
                            <li>
                                <a href="{{asset('/contact')}}">CONTACT</a>
                            </li>
                            <li>
                                <a href="#">BUY NOW</a>
                            </li>
                        </ul>
                    </div>
                    <!--End header top left-->
                    <div class="tz-header-top-right pull-right">
                        <ul class="top-header-social pull-right">
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
                        <div class="tz-hotline pull-right"><i class="fa fa-phone"></i>HOTLINE: 
                            @foreach ($dataOptions as $item)
                                @if ($item->OptName == 'hotline')
                                    {{$item->OptValue}}
                                @endif
                            @endforeach</div>
                    </div>
                </div>
            </div>
            <!--End header top-->

            <!--Header Content-->
            <div class="tz-header-content">
                <div class="tz-header-logo pull-left">
                    <a href="/">
                        @foreach ($dataOptions as $item)
                                @if ($item->OptName == 'logoweb')
                                    <img src="{{asset('').$item->OptValue}}" alt="{{config('app.name')}}">
                                @endif
                        @endforeach
                        
                    </a>
                </div>
                <div class="tz-header-ads pull-right">
                    <a href="#">
                        <img src="{{asset('images/data/header-replace.png')}}" alt="ads">
                    </a>
                </div>

                <!--navigation mobi-->
                <button data-target=".nav-collapse" class="btn-navbar tz_icon_menu" type="button">
                    <i class="fa fa-bars"></i>
                </button>
                <!--End navigation mobi-->
            </div>
            <!--Header end content-->

            <!--Header menu-->
            <div class="tz-header-menu">
                <div class="container">

                    <!--Main Menu-->
                    <nav class="nav-menu pull-left">
                        <ul class="tz-main-menu nav-collapse">
                             <li>
                                <a href="/">
                                   HOME
                                   
                                </a>
                            </li>
                           @foreach ($dataMenu as $item)
                               @if ($item->CateStatus == 1)
                                <li>
                                    <a href="/">
                                        {{$item->CateName}}
                                    </a>
                                </li>
                               @endif
                           @endforeach
                        </ul>
                    </nav>
                    <!--End Main menu-->

                    <!--Start search-->
                    <div class="tz-search pull-right">
                        <form class="tz-form-search">
                            <input type="text" name="s" class="input-width" value="" placeholder="Search...">
                            <i class="fa fa-search tz-button-search"></i>
                        </form>
                    </div>
                    <!--End search-->

                </div>
            </div>
            <!--End header menu-->

        </header>