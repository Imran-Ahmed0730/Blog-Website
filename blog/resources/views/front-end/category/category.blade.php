@extends('front-end.master')
@section('content')
{{--    <div class="row">--}}
{{--        <div class="col-md-10 offset-1">--}}
{{--            <div class="card">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6"></div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        --}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<div class="row m-5">
    <div class="col-md-10 offset-1">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset($category->image)}}" alt="" srcset="" height="300px">
            </div>
            <div class="col-md-6 my-3">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{$category->category_name}}</h2>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <h4>{{$category->description}}</h4>
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
@endsection
