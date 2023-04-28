@extends('front-end.master')
@section('content')
    <div class="row m-5">
        <div class="col-md-10 offset-1">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset($directed_author->image)}}" alt="" srcset="" height="300px">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>{{$directed_author->name}}</h2>
                        </div>
                    </div>
                    <div class="row my-5 mx-2">
                        <div class="col-md-12">
                            <div class="rotate">
                                <h2 class="heading">About</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid aperiam,
                                at consectetur eaque illo in laudantium libero nesciunt obcaecati possimus
                                qui quibusdam ratione repellat sapiente vel vero, voluptas voluptatibus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <section class="related-posts my-5">
                <div class="container">
                    <div class="related-title">
                        <h3>Related posts</h3>
                    </div>
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-md-6 col-lg-3">
                                <div class="card small-card simple-overlay-card">
                                    <a href="{{route('blog.details', ['slug'=>$blog->slug])}}"><img src="{{asset($blog->image)}}" class="card-img" alt="" /></a>
                                    <div class="card-img-overlay">
                                        <ul class="category-tag-list mb-0">
                                            <li class="category-tag-name">
                                                <a href="{{route('blog.details', ['slug'=>$blog->slug])}}">{{$blog->category->category_name}}</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="{{route('blog.details', ['slug'=>$blog->slug])}}">{{$blog->blog_title}}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
    <style>
        .rotate {
            position: absolute;
            top: .4em;
            left: -50px; }
        .rotate .heading {
            font-family: "Karla", Arial, sans-serif;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1em;
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
            -webkit-transform-origin: left top 0;
            -moz-transform-origin: left top 0;
            -ms-transform-origin: left top 0;
            -o-transform-origin: left top 0;
            transform-origin: left top 0;
            position: relative; }
        .rotate .heading:after {
            position: absolute;
            top: 8px;
            right: -40px;
            content: '';
            background: #000;
            width: 40px;
            height: 1px; }
    </style>
@endsection
