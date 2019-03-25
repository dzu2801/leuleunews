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
           <!--Control-->
   

        <!--Blog wrap-->
        <div class="blog-post-sidebar">

            <!--Blog post-->
            <div class="blog-post">
                <div class="container">
                    <div class="row">
                        <!-- Blog Category List -->
                        <div class="col-md-3 blog-sidebar">
                            <div class="widget widget_search">
                                {{-- <form>
                                    <input type="text" name="s" value="" placeholder="Search by words">
                                    <i class="icon-search fa fa-search"></i>
                                </form> --}}
                            </div>
                            <div class="widget widget_categories">
                                <ul>
                                    <li>
                                        <a href="#">ALL CATEGORY</a>
                                    </li>
                                    @foreach ($dataMenu as $item)
                                        <li>
                                            <a href="{{asset('/category/').'/'.$item->id}}">{{$item->CateName}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget">
                                <div class="tz-title-filter">
                                    <h3 class="tz-title">
                                        <span>RECENTS</span>
                                    </h3>
                                    <div class="tz-cat-filter tz-cat-filter2">
                                        <span>All <i class="fa fa-angle-down"></i></span>
                                    </div>
                                </div>
                                <div class="widget-ca-box">
                                    <ul class="widget-post-box">
                                        @foreach($dataPostRandom as $item)
                                        <li>
                                            <div class="widget_thumbnail">
                                                <a href="{{asset('posts/'.$item->id)}}">
                                                    <img src="{{asset('uploads/'.$item->PostPhoto)}}" alt="{{$item->PostName}}">
                                                </a>
                                            </div>
                                            <div class="widget_item_info">
                                                <h4><a href="{{asset('posts/'.$item->id)}}">{{$item->PostName}}</a></h4>
                                                <span class="meta">by <a href="#">Jane Doe / </a>  {{$item->PostDate}} </span>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                        <!-- End Category List -->
                        <div class="col-md-9 border-left">
                            <article class="single-post">
                                <div class="tz-single-thumbnail">
                                    <img src="/uploads/{{$dataPost[0]->PostPhoto}}" alt="{{$dataPost[0]->PostName}}">
                                </div>
                                <h1 class="single-title">{{$dataPost[0]->PostName}}</h1>
                                <span class="post-meta">by <a href="#">Jane William Doe</a> /  {{$dataPost[0]->PostDate}} </span>
                                <div class="post-content">
                                  {{$dataPost[0]->PostContent}}
                                </div>
                                <div class="sing-post-footer">
                                    <div class="meta-tags pull-left">
                                        Tags:
                                        
                                        <a href="#">courses,</a>
                                        <a href="#">university,</a>
                                        <a href="#">post,</a>
                                        <a href="#">blog,</a>
                                        <a href="#">eto,</a>
                                        <a href="#">elearning,</a>
                                        <a href="#">teachers</a>
                                    </div>
                                    <div class="tz-share pull-right">
                                        Share:
                                        <a href="#" class="fa fa-facebook-square"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-google"></a>
                                        <a href="#" class="fa fa-dribbble"></a>
                                        <a href="#" class="fa fa-behance"></a>
                                    </div>
                                </div>
                                <div class="tz-comment">
                                    <h2 class="comments-title tz-title"><span>Comments (1)</span></h2>
                                    <ol class="comments-list">
                                        <li>
                                            <div class="comment-image">
                                                <img src="{{asset('images/data/image-demo/110x110.png')}}" alt="author">
                                            </div>
                                            <div class="comment-block">
                                                <cite>Richard Nemur</cite>
                                                <div class="comment-content">
                                                    <p>
                                                        Quisque metus enim, venenatis fermentum, mollis in, porta et, nibh. Duis vulputate elit in elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ol>
                                    <div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title tz-title">
                                            <span>Leave a comment</span>
                                        </h3>
                                        <form id="commentform" class="comment-form">
                                            <div class="row">
                                                <div class="comment-form-author  col-sm-6">
                                                    <input id="author" name="author" type="text" placeholder="Full Name*" value="">
                                                </div>
                                                <div class="comment-form-email col-sm-6">
                                                    <input id="email" name="email" type="text" placeholder="Email*" value="">
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea placeholder="Enter Your Comment" id="comment" name="comment" cols="40" rows="8"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <input name="submit" type="submit" id="submit" class="submit" value="Post Comments">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div><!--End row-->
                </div><!--End container-->
            </div>
            <!--End blog post-->

        </div>

        </div>
        <!--End blog wrap-->
@endsection