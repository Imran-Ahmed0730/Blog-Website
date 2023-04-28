@extends('front-end.master')
@section('content')
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-body">
                    @foreach($blogs as $blog)
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
                                        <div class="author-date my-2">
                                            <a class="author" href="#">
                                                <img src="{{asset($blog->author->image)}}" class="rounded-circle" />
                                                <span class="writer-name-small">{{$blog->author->name}}</span>
                                            </a>
                                            <a class="date" href="#">
                                                <span>{{$blog->date}}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
