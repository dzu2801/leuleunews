@extends('layout.layoutContainer')
@section('Featurde')
    <div class="featured-post-wrap">
            <div class="container">
                <ul class="featured-post">
                    <li>
                        @for ($j = 0; $j < 5; $j++)
                            <div class="tz-grid-post-{{$j}}">
                            <div class="tz-featured-thumb">
                                <a href="{{asset('posts/'.$postdata[$j]->id)}}">
                                    <img src="{{'/uploads/'.$postdata[$j]->PostPhoto}}" alt="{{$postdata[$j]->PostName}}">
                                </a>
                            </div>
                            <div class="tz-featured-info">
                                <a class="{{$postdata[$j]->CateColor}}" href="{{$postdata[$j]->CateID}}">{{$postdata[$j]->CateName}}</a>
                                <h3><a href="{{asset('posts/'.$postdata[$j]->id)}}">{{$postdata[$j]->PostName}}</a></h3>
                                <span class="tz-featured-meta">by Jane <a href="/">William Doe /</a>  {{$postdata[$j]->PostDate}} </span>
                            </div>
                        </div> 
                        @endfor
                    </li>
                    @if (count($postdata) > 5)
                    <li>
                        @php ($j = 0)
                        @for ($i = 5; $i < count($postdata); $i++)
                            <div class="tz-grid-post-{{$j}}">
                            <div class="tz-featured-thumb">
                                <a href="{{asset('posts/'.$postdata[$i]->id)}}">
                                    <img src="{{'/uploads/'.$postdata[$i]->PostPhoto}}" alt="{{$postdata[$i]->PostName}}">
                                </a>
                            </div>
                            <div class="tz-featured-info">
                                <a class="{{$postdata[$i]->CateColor}}" href="{{$postdata[$i]->CateID}}">{{$postdata[$i]->CateName}}</a>
                                <h3><a href="{{asset('posts/'.$postdata[$i]->id)}}">{{$postdata[$i]->PostName}}</a></h3>
                                <span class="tz-featured-meta">by Jane <a href="/">William Doe /</a>  {{$postdata[$i]->PostDate}} </span>
                            </div>
                        </div>   
                        @php ($j ++)
                        @endfor
                    </li>
                    @endif
                   

                </ul>
            </div>
        </div>           <!--End Content right-->
@endsection
@section('content')
         <div class="row border-bottom2">
            
                <!--Content left-->
                <div class="col-md-8 col-sm-8 style-box1 tzcontent">
                    <!--Wrap element SMARTPHONES-->
                        {{-- @include('layout.inc.elementSmartPhone') --}}
                         <div class="tz-box-one">

                        <!--Title-->
                        <div class="tz-title-filter">
                            <h3 class="tz-title">
                                <span>SMART PHONE</span>
                            </h3>
                            <div class="tz-cat-filter">
                                <span>All</span>
                            </div>
                        </div>
                        <!--End title-->

                        <!--Content-->
                        <div class="row">
                            @php($phone_i =0)
                            @foreach ($postSmartPhone as $item )
                                @if ($phone_i == 0)
                                <div class="col-md-6">

                                <!--Item large-->
                                    <div class="item-large">
                                        <div class="tz-thumbnail">
                                            <a href="/posts/.{{$item->id}}">
                                                <img src="{{asset('uploads/'.$item->PostPhoto)}}" alt="{{$item->PostName}}">
                                            </a>
                                        </div>
                                    <div class="tz-infomation">
                                        <a class="{{$item->CateColor}}" href="{{asset('category/'.$item->CateID)}}">{{ $item->CateName }}</a>
                                        <h3 class="tz-post-title"><a href="{{asset('posts/'.$item->id)}}">{{ $item->PostName }}</a></h3>
                                        <span class="meta">by <a href="{{asset('posts/'.$item->id)}}">Jane William Doe / </a> {{ $item->PostDate }}</span>
                                        <p>It is a significant blessing that I am able to continue serving my community through SMUM. Founded in 1983 as an outreach ministry of...</p>
                                    </div>
                                </div>
                                <!--End item large-->
                                </div>
                                    
                                @endif
                                @if ($phone_i !=0)
                                <div class="col-md-6">
                                <div class="item-small">
                                    <div class="tz-thumbnail">
                                        <a href="/posts/{{$item->id}}">
                                            <img src="{{asset('uploads/'.$item->PostPhoto)}}" alt="{{$item->PostName}}">
                                        </a>
                                    </div>
                                    <div class="tz-infomation">
                                        <h3 class="tz-post-title"><a href="/posts/{{$item->id}}">{{ $item->PostName }}</a></h3>
                                        <span class="meta">by <a href="page-blog.html">Jane William Doe / </a> {{ $item->PostDate }} </span>
                                    </div>
                                </div>
                                </div>
                            
                                @endif
                            @php($phone_i ++)
                            @endforeach
                           
                        </div>
                        <!--End Content-->

                    </div>
                    <!--End Wrap element SMARTPHONE-->

                    <!--Wrap element Cars And Motos-->
                           <div class="tz-box-two border-top2">
                        <div class="row">

                            <!--Content left-->
                            <div class="col-md-6 border-right padding-style">

                                <!--title-->
                                <div class="tz-title-filter">
                                    <h3 class="tz-title">
                                        <span>CARS & Motos</span>
                                    </h3>
                                </div>
                                <!--End title-->

                                <!--Item vertical-->
                                <div class="item-thumbnail-wrap item-vertical">
                                    <div class="tz-thumbnail">
                                        <a href="single-blog.html">
                                            <img src="images/data/image-demo/370x593.png" alt="The 20 free things in Sydney with my girlfriend">
                                        </a>
                                        <a class="blue-light cat_name" href="page-blog.html">ELECTRIC</a>
                                        <div class="tz-infomation">
                                            <h3 class="tz-post-title"><a href="single-blog.html">Erin Fetherston, Nordstrom Team for Bridesms Line</a></h3>
                                            <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                                            <p>
                                                It is a significant blessing that I am able to continue serving my community through SMUM. Founded in 1983 as an outreach ministry of...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Item vertical-->

                            </div>
                            <!--End content left-->

                            <!--Content right-->
                            <div class="col-md-6 padding-style">
                                <!--Start one cat-->
                                <a class="red cat_name" href="page-blog.html">DON’T MISS</a>
                                <div class="one-cat">
                                @php($miss_i = 0)
                                @foreach ($datadontmiss as $item )
                                   @if($miss_i != 0)
                                     <!--Item small two-->
                                    <div class="item-small style-two">
                                        <div class="tz-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('uploads/'.$item->PostPhoto)}}" alt="{{$item->PostName}}">
                                            </a>
                                        </div>
                                        <div class="tz-infomation">
                                            <h3 class="tz-post-title"><a href="/posts/{{$item->id}}">{{$item->PostName}}</a></h3>
                                            <span class="meta">by <a href="{{asset('posts/'.$item->id)}}">William / </a>  {{$item->PostDate}} </span>
                                            <p>It is a significant blessing that I am able to continue serving my community through SMUM. Founded in 1983 as an out..</p>
                                        </div>
                                    </div>
                                    <!--End Item small two-->
                                    
                                   @endif
                                @php($miss_i ++)
                                @endforeach
                                </div>
                                <!--End one cat-->
                            </div>
                            <!--End content left-->
                        </div>
                    </div>
                    <!--End Wrap element-->

                    <!--Wrap element Laptops-->
                        {{-- @include('layout.inc.elementLaptop') --}}
                          <div class="tz-box-one border-top2">

                        <!--Title-->
                        <div class="tz-title-filter">
                            <h3 class="tz-title">
                                <span>LAPTOP</span>
                            </h3>
                            <div class="tz-cat-filter">
                                <span>All</span>
                            </div>
                        </div>
                        <!--End title-->

                        <!--Content-->
                        <div class="row">

                            <!--Box content two columns-->
                            <div class="cat-box-two-columns">
                                <div class="col-md-6">
                                @if(is_null($laptopData) != count($laptopData)>=6)
                                @php($laptop_i = 0)
                                @for ($i =0 ; $i < 3 ; $i++ )
                                   @if ($laptop_i == 0)
                                       <!--Item thumbnail wrap-->
                                    <div class="item-thumbnail-wrap">
                                        <div class="tz-thumbnail">
                                            <a href="{{asset('posts/'.$laptopData[$i]->id)}}">
                                                <img src="{{asset('uploads/'.$laptopData[$i]->PostPhoto)}}" alt="{{$laptopData[$i]->PostName}}">
                                            </a>
                                            <div class="tz-infomation">
                                                <h3 class="tz-post-title"><a href="{{asset('posts/'.$laptopData[$i]->id)}}">{{$laptopData[$i]->PostName}}</a></h3>
                                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  {{$laptopData[$i]->PostDate}} </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Item thumbnail wrap-->
                                   @else
                                        <!--Item small-->
                                    <div class="item-small">
                                        <div class="tz-thumbnail">
                                            <a href="{{asset('posts/'.$laptopData[$i]->id)}}">
                                                <img src="{{asset('uploads/'.$laptopData[$i]->PostPhoto)}}" alt="{{$laptopData[$i]->PostName}}">
                                            </a>
                                        </div>
                                        <div class="tz-infomation">
                                            <h3 class="tz-post-title"><a href="{{asset('posts/'.$laptopData[$i]->id)}}">{{$laptopData[$i]->PostName}}</a></h3>
                                            <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  {{$laptopData[$i]->PostDate}} </span>
                                        </div>
                                    </div>
                                    <!--End item small-->
                                   @endif
                                    @php($laptop_i ++)
                                @endfor
                                </div>
                                <!--comment-->
                                <div class="col-md-6">
                                    @php($laptop_j = 0)
                                @for ($i =3 ; $i < 6 ; $i++ )
                                   @if ($laptop_j == 0)
                                    <!--Item thumbnail wrap-->
										<div class="item-thumbnail-wrap responsive-top">
                                        <div class="tz-thumbnail">
                                            <a href="{{asset('posts/'.$laptopData[$i]->id)}}">
                                                <img src="{{asset('uploads/'.$laptopData[$i]->PostPhoto)}}" alt="{{$laptopData[$i]->PostName}}">
                                            </a>
                                            <div class="tz-infomation">
                                                <h3 class="tz-post-title"><a href="{{asset('posts/'.$laptopData[$i]->id)}}">{{$laptopData[$i]->PostName}}</a></h3>
                                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  {{$laptopData[$i]->PostDate}} </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Item thumbnail wrap-->
                                   @else
                                    <!--Item small-->
                                    <div class="item-small">
                                        <div class="tz-thumbnail">
                                            <a href="{{asset('posts/'.$laptopData[$i]->id)}}">
                                                <img src="{{asset('uploads/'.$laptopData[$i]->PostPhoto)}}" alt="{{$laptopData[$i]->PostName}}">
                                            </a>
                                        </div>
                                        <div class="tz-infomation">
                                            <h3 class="tz-post-title"><a href="{{asset('posts/'.$laptopData[$i]->id)}}">{{$laptopData[$i]->PostName}}</a></h3>
                                            <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  {{$laptopData[$i]->PostDate}} </span>
                                        </div>
                                    </div>
                                    <!--End item small-->
                                   @endif
                                    @php($laptop_j ++)
                                @endfor
                                @endif
                                </div>
                            </div>
                            <!--End box content two columns-->

                        </div>
                        <!--End content-->

                    </div>
                    <!--End Wrap element Laptop-->

                </div>
                <!--End Content left-->

                <!--Content right-->
                {{-- @include('layout.inc.contentHotNews') --}}
                  <div class="col-md-4 col-sm-4 remove-padding tzsidebar">

                    <!--Start Element-->
                    <div class="tz-element">
                        <div class="margin-bottom10">
                            <div class="fb-page" data-href="https://www.facebook.com/hondaotobienhoa.vn/" data-tabs="timeline" data-width="360" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hondaotobienhoa.vn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hondaotobienhoa.vn/">Honda Ô tô Biên Hòa</a></blockquote></div>
                        </div>
                    </div>
                    <!--End Element-->

                    <!--Start Element-->
      
                    <!--End Element-->

                    <!--Start Element-->
                    <div class="tz-element border-top2">
                        <div class="tz-title-filter full">
                            <h3 class="tz-title">
                                <span>REVIEW</span>
                            </h3>
                        </div>
                        <div class="post-wrap-rating">
                            @foreach ($ReviewData as $item )
                            <div class="item-rating item-small">
                                <div class="tz-thumbnail">
                                    <a href="{{asset('posts/'.$item->id)}}">
                                        <img src="{{asset('uploads/'.$item->PostPhoto)}}" alt="{{$item->PostName}}">
                                    </a>
                                </div>
                                <div class="tz-infomation">
                                    <h3 class="tz-post-title"><a href="{{asset('posts/'.$item->id)}}">{{$item->PostName}}</a></h3>
                                    <span class="rating star5">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                    <!--End Element-->

                    <!--Start Element-->
                    <div class="tz-element border-top2">
                        <div class="tz-title-filter full">
                            <h3 class="tz-title">
                                <span>LASTESTS</span>
                            </h3>
                        </div>
                        <ul class="tz-lastests">
                            <li>
                                <div class="head">
                                    <a class="glod cat_name" href="page-blog.html">ELECTRIC</a>
                                    <h3 class="tz-post-title"><a href="single-blog.html">Travelling with kids on Queens us Capricorn Coast</a></h3>
                                </div>
                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                            </li>
                            <li>
                                <div class="head">
                                    <a class="red cat_name" href="page-blog.html">MOBILE</a>
                                    <h3 class="tz-post-title"><a href="single-blog.html">Travelling with kids on Queens us Capricorn Coast</a></h3>
                                </div>
                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                            </li>
                            <li>
                                <div class="head">
                                    <a class="blue-dark cat_name" href="page-blog.html">ELECTRIC</a>
                                    <h3 class="tz-post-title"><a href="single-blog.html">Travelling with kids on Queens us Capricorn Coast</a></h3>
                                </div>
                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                            </li>
                            <li>
                                <div class="head">
                                    <a class="blue-light cat_name" href="page-blog.html">ELECTRIC</a>
                                    <h3 class="tz-post-title"><a href="single-blog.html">Travelling with kids on Queens us Capricorn Coast</a></h3>
                                </div>
                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                            </li>
                            <li>
                                <div class="head">
                                    <a class="light-coral cat_name" href="page-blog.html">ELECTRIC</a>
                                    <h3 class="tz-post-title"><a href="single-blog.html">Travelling with kids on Queens us Capricorn Coast</a></h3>
                                </div>
                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  12 April 2015 </span>
                            </li>
                        </ul>
                    </div>
                    <!--End Element-->
                </div>
                <!--End Content right-->

            </div>
             <div class="row">
                <div class="col-md-12">
                    <div class="tz-box-cat-slider">
                        <!--Slider post-->
                        <div class="slider-post-wrap">

                            <ul class="slider-post slider-post3">
                               @foreach ($DataViews as $item)
                                <li>
                                    <div class="item-thumbnail-wrap">
                                        <div class="tz-thumbnail">
                                            <a href="{{asset('posts/'.$item->id)}}">
                                                <img src="{{asset('uploads/'.$item->PostPhoto)}}" alt="{{$item->PostName}}">
                                            </a>

                                            <div class="tz-infomation">
                                                <a class="{{$item->CateColor}}" href="{{asset('category/'.$item->CateID)}}">{{$item->CateName}}</a>
                                                <h3 class="tz-post-title"><a href="{{asset('posts/'.$item->id)}}">{{$item->PostName}}</a></h3>
                                                <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  {{asset('posts/'.$item->PostDate)}} </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               @endforeach
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
                 {{-- @include('layout.inc.elementElectronicDevices') --}}
                    <div class="tz-box-three">

                        <!--Title-->
                        <div class="tz-title-filter">
                            <h3 class="tz-title">
                                <span>ELECTRONIC DEVICES</span>
                            </h3>
                            <div class="tz-cat-filter">
                                <span>All</span>
                            </div>
                        </div>
                        <!--End title-->

                        <!--Content-->
                        <div class="row">
                            @if(is_null($devicesData) != count($devicesData)>=6)
                            <div class="col-md-6">
                            @php($devices_i = 0)
                            @for($i=0;$i<3;$i++)
                                <!--Item large-->
                                @if($devices_i == 0)
                                    <div class="item-large">
                                    <div class="tz-thumbnail">
                                        <a href="{{asset('posts/'.$devicesData[$i]->id)}}">
                                            <img src="{{asset('uploads/'.$devicesData[$i]->PostPhoto)}}" alt="{{$devicesData[$i]->PostName}}">
                                        </a>
                                    </div>
                                    <div class="tz-infomation">
                                        <a class="{{$devicesData[$i]->CateColor}}" href="{{asset('posts/'.$devicesData[$i]->CateID)}}">{{$devicesData[$i]->CateName}}</a>
                                        <h3 class="tz-post-title"><a href="{{asset('category/'.$devicesData[$i]->CateID)}}">{{$devicesData[$i]->PostName}}</a></h3>
                                        <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>{{$devicesData[$i]->PostDate}}</span>
                                        <p>It is a significant blessing that I am able to continue serving my community through SMUM. Founded in 1983 as an outreach ministry of...</p>
                                    </div>
                                </div>
                                @else
                                <!--Start item small-->
                                <div class="item-small">
                                    <div class="tz-thumbnail">
                                        <a href="{{asset('posts/'.$devicesData[$i]->id)}}">
                                            <img src="{{asset('uploads/'.$devicesData[$i]->PostPhoto)}}" alt="{{$devicesData[$i]->PostName}}">
                                        </a>
                                    </div>
                                    <div class="tz-infomation">
                                        <h3 class="tz-post-title"><a href="{{asset('posts/'.$devicesData[$i]->id)}}">{{$devicesData[$i]->PostName}}</a></h3>
                                        <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  {{$devicesData[$i]->PostDate}} </span>
                                    </div>
                                </div>
                                <!--End item small-->
                                @endif
                                @php($devices_i ++)
                            @endfor  
                            </div>
                            <div class="col-md-6">
                            @php($devices_j = 0)
                            @for ($i =3 ; $i <6 ; $i++)
                            @if ($devices_j == 0)
                                 <!--Item large-->
                                <div class="item-large responsive-top">
                                    <div class="tz-thumbnail">
                                        <a href="{{asset('posts/'.$devicesData[$i]->id)}}">
                                            <img src="{{asset('uploads/'.$devicesData[$i]->PostPhoto)}}" alt="{{$devicesData[$i]->PostName}}">
                                        </a>
                                    </div>
                                    <div class="tz-infomation">
                                        <a class="{{$devicesData[$i]->CateColor}}." href="{{asset('catelogory/'.$devicesData[$i]->CateID)}}">{{$devicesData[$i]->CateName}}</a>
                                        <h3 class="tz-post-title"><a href="{{asset('posts/'.$devicesData[$i]->id)}}">{{$devicesData[$i]->PostName}}</a></h3>
                                        <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  {{$devicesData[$i]->PostDate}} </span>
                                        <p>It is a significant blessing that I am able to continue serving my community through SMUM. Founded in 1983 as an outreach ministry of...</p>
                                    </div>
                                </div>
                                <!--Start item large-->
                            @else
                                                                <!--Start item small-->
                                <div class="item-small">
                                    <div class="tz-thumbnail">
                                        <a href="{{asset('posts/'.$devicesData[$i]->id)}}">
                                            <img src="{{asset('uploads/'.$devicesData[$i]->PostPhoto)}}" alt="{{$devicesData[$i]->PostName}}">
                                        </a>
                                    </div>
                                    <div class="tz-infomation">
                                        <h3 class="tz-post-title"><a href="{{asset('posts/'.$devicesData[$i]->id)}}">{{$devicesData[$i]->PostName}}</a></h3>
                                        <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  {{$devicesData[$i]->PostDate}} </span>
                                    </div>
                                </div>
                                <!--End item small-->
                            @endif
                            @php($devices_j ++)
                            @endfor
                            </div>

                        </div>
                        @endif
                        <!--End content-->

                    </div>
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
                               @foreach ($randomData as $item )
                                <li>
                                    <a href="{{asset('posts/'.$item->id)}}">
                                        <img src="{{asset('uploads/'.$item->PostPhoto)}}" alt="{{$item->PostName}}">
                                    </a>
                                </li>
                               @endforeach
                               
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
@endsection
