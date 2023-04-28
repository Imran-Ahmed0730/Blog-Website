@extends('front-end.master')
@section('content')
    <section class="banner-section">
        <div class="container">
            <div class="banner-carousel">
                <div class="banner-item">
                    <div class="card">
                        <a href="single-layout-one.html"><img src="{{asset('front-end-asset')}}/assets
/images/baby-girl.jpg" class="card-img" alt="" /></a>
                        <div class="card-img-overlay banner-text">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">Take the stress out with nature</a>
                            </h5>
                            <p class="card-text mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                                nostrum eum, cum ab iusto error totam quae nemo dicta nesciunt
                                quo earum ipsam, ex aspernatur.
                            </p>
                            <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="banner-item">
                    <div class="card">
                        <a href="single-layout-one.html"><img src="{{asset('front-end-asset')}}/assets
/images/london.jpg" class="card-img" alt="" /></a>
                        <div class="card-img-overlay banner-text">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">travel</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">10 things you should not miss about London</a>
                            </h5>
                            <p class="card-text mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                                nostrum eum, cum ab iusto error totam quae nemo dicta nesciunt
                                quo earum ipsam, ex aspernatur.
                            </p>
                            <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="banner-item">
                    <div class="card">
                        <a href="single-layout-one.html"><img src="{{asset('front-end-asset')}}/assets
/images/blonde-girl.jpg" class="card-img" alt="" /></a>
                        <div class="card-img-overlay banner-text">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">Why alone time is a must for you</a>
                            </h5>
                            <p class="card-text mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                                nostrum eum, cum ab iusto error totam quae nemo dicta nesciunt
                                quo earum ipsam, ex aspernatur.
                            </p>
                            <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Banner section end -->

    <!-- Featured Posts -->
    <section class="featured-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Featured Authors</h2>
            </div>
            @php $i=0 @endphp
            <div class="row no-gutters">
                @foreach($authors as $author)
                    @if($i++ == 3)
                        @break
                    @else
                    <div class="col-md-4 px-4">
                        <div class="card border-0 card-450">
                            <a href="single-layout-one.html">
                                <img src="{{asset($author->image)}}" class="card-img-top" alt="" height="300px"/>
                            </a>
                            <div class="card-body px-0">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">{{$author->name}}</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <p>
                                        {{$author->description}}
                                    </p>
                                </h5>
                            </div>
                        </div>
                    </div>
                      @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- Featured posts end -->

    <!-- Kavya posts -->
    <section class="kavya-posts popular">
        <div class="container">
            <div class="section-title">
                <h2>Popular Categories</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="posts-wrapper">
                        <div class="row">
                            @foreach($categories as $cat)
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset($cat->image)}}" alt="" height="150px" width="100%"/>
                                        </a>
                                        <div class="card-body px-0">
                                            <ul class="category-tag-list">
                                                <li class="category-tag-name">
                                                    <a href="#">{{$cat->category_name}}</a>
                                                </li>

                                            </ul>
                                            <h5 class="card-title title-font">
                                                <a href="#">
                                                    {{$cat->description}} </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="sidebar-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Recent Posts</h5>
                        </div>
                        <div class="sidebar-content author-posts">
                            @php $i=0; $cat_name = ' ' @endphp
                            @foreach($blogs as $blog)
                                @if($i == 3)
                                    @break
                                @else
                                @if($blog->category->category_name != $cat_name)
                                        <div class="card mb-3">
                                            <div class="row no-gutters">
                                                <div class="col-4 col-md-4">
                                                    <a href="single-layout-one.html">
                                                        <img src="{{asset($blog->image)}}" class="card-img" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-8 col-md-8">
                                                    <div class="card-body">
                                                        <ul class="category-tag-list mb-0">
                                                            <li class="category-tag-name">
                                                                <a href="#">{{$blog->category->category_name}}</a>
                                                            </li>
                                                        </ul>
                                                        <h5 class="card-title title-font"><a href="{{route('blog.details', ['slug'=> $blog->slug])}}">{{$blog->blog_title}}</a>
                                                        </h5>
                                                        <div class="author-date">
                                                            <a class="date" href="#">
                                                                <span>{{$blog->date}}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $cat_name = $blog->category->category_name;
                                            $i++;
                                        @endphp
                                @endif

                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kavya posts end -->

    <!-- Popular Posts -->
    <section class="popular-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Recent Blogs</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    @php $i=0 @endphp
                    @foreach($blogs as $blog)
                        @if($i++ == 3)
                            @break
                        @else
                            <div class="card mb-4">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset($blog->image)}}" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list">
                                                <li class="category-tag-name">
                                                    <a href="#">{{$blog->category->category_name}}</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="{{route('blog.details', ['slug'=>$blog->slug])}}">{{$blog->blog_title}}</a>
                                            </h5>
                                            <p class="card-text">{{$blog->description}}<p>
                                            <div class="author-date">
                                                <a class="author" href="{{route('blog.details', ['slug'=>$blog->slug])}}">
                                                    <img src="{{asset($blog->author->image)}}" class="rounded-circle" />
                                                    <span class="writer-name-small">{{$blog->author->name}}</span>
                                                </a>
                                                <a class="date" href="{{route('blog.details', ['slug'=>$blog->slug])}}">
                                                    <span>{{$blog->date}}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Popular posts end -->
@endsection
