@extends('layout.layoutContainer')
@section('Featurde')
     <div class="tz-heading">
            <img src="{{asset('images/data/image-demo/1220x232.png')}}" alt="blog page">
            <h1>Blog Page</h1>
        </div>
    <div class="tz-control">
            <div class="container">

                <!--Breadcrumbs-->
                <ul class="tz-breadcrumbs pull-left">
                    <li>
                        <a href="#">Home</a><i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="page-blog.html">Category</a><i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        Single Blog
                    </li>
                </ul>
                <!--End breadcrumbs-->

                <!--Blog control meta-->
                <div class="blog-control-meta pull-right">

                    <!--Blog Order-->
                    
                    <!--End blog Order-->

                </div>
                <!--end blog control meta-->

            </div>
    </div>
        <!--End control-->
@endsection
@section('content')
      

        <!--Blog wrap-->
        <div class="blog-post-wrap">

            <!--Blog post for blog 3 column-->
            <div class="blog-post two-columns">
                <div class="container">
                    <div class="row">
                        @php($i =0)
                        @foreach ($datacategory as $item )
                            @if ($i % 2 != 0 || $i ==0 || $i == 1)
                            <div class="col-md-6 col-sm-6">
                            <!--Item blog post-->
                            <div class="item-blog-post item-post-list">
                                <div class="tz-post-thumbnail">
                                    <img src="{{asset('uploads/'.$item->PostPhoto)}}" alt="column2">
                                </div>
                                <div class="tz-post-info">
                                    <h3><a href="{{asset('posts/'.$item->id)}}">{{$item->PostName}}</a></h3>
                                    <span class="meta">by <a href="page-blog.html">Jane William Doe / </a> {{$item->PostDate}} </span>
                                    <p>{{substr($item->PostContent,0,100)}}...</p>
                                </div>
                            </div>
                            <!--End Item blog post-->
                            </div>   
                            @else
                             <div class="col-md-6 col-sm-6 last">

                            <!--Item blog post-->
                            <div class="item-blog-post item-post-list">
                                <div class="tz-post-thumbnail">
                                    <img src="{{asset('uploads/'.$item->PostPhoto)}}" alt="column2">
                                </div>
                                <div class="tz-post-info">
                                    <h3><a href="{{asset('posts/'.$item->id)}}">{{$item->PostName}} </a></h3>
                                    <span class="meta">by <a href="page-blog.html">Jane William Doe / </a>  {{$item->PostDate}} </span>
                                    <p>{{substr($item->PostContent,0,100)}}...</p>
                                </div>
                            </div>
                            <!--End Item blog post-->

                        </div>
                            @endif
                            @php($i ++)
                        @endforeach
                    </div><!--End row-->
                </div><!--End container-->
            </div>
            <!--End blog post-->

            <!--Pagination-->
            <nav class="tz-pagination">
                <ul class="pagination_list">
                    <li>
                        <a class="prev" href="categories-2column-list.html"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li>
                        <a href="categories-2column-list.html">1</a>
                    </li>
                    <li>
                        <a href="categories-2column-list.html">2</a>
                    </li>
                    <li>
                        <span class="current">3</span>
                    </li>
                    <li>
                        <span>...</span>
                    </li>
                    <li>
                        <a href="categories-2column-list.html">4</a>
                    </li>
                    <li>
                        <a href="categories-2column-list.html">5</a>
                    </li>
                    <li>
                        <a class="next" href="categories-2column-list.html"><i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            </nav>
</div>
@endsection