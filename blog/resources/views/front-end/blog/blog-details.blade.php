@extends('front-end.master')
@section('content')
    <section class="single-layout">
        <div class="container">
            <div class="blog-img-main">
                <img src="{{asset($blog->image)}}" alt="">
            </div>
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="blog-content-wrap">
                        <div class="blog-title-wrap">
                            <div class="author-date">
                                <a class="author" href="#">
                                    <img src="{{asset($blog->author->image)}}" alt="" class="rounded-circle" />
                                    <span class="">{{$blog->author->name}}</span>
                                </a>
                                <a class="date" href="#">
                                    <span>Posted on {{$blog->date}}</span>
                                </a>
                            </div>
                            <ul class="category-tag-list mb-0">
                                <li class="category-tag-name">
                                    <a href="#">Featured</a>
                                </li>
                                <li class="category-tag-name">
                                    <a href="#">{{$blog->category->category_name}}</a>
                                </li>
                            </ul>
                            <h1 class="title-font">{{$blog->title}}</h1>
                        </div>

                        <div class="blog-desc">
                            <p>{{$blog->description}}</p>
                        </div>
                        <div class="tags-wrap">
                            <div class="blog-tags">
                                <p>Tags:</p>
                                <ul class="sidebar-list tags-list">
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">December</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Fun</a></li>
                                </ul>
                            </div>
                            <div class="share-buttons">
                                <p>Share Now:</p>
                                <ul class="share-list">
                                    <li><a href="#"><img src="assets/images/facebook.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/pinterest.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/messenger.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-author-info">
                            <div class="author-img">
                                <img src="{{asset($blog->author->image)}}" alt="">
                            </div>
                            <div class="author-desc">
                                <small>written by</small>
                                <h5>{{$blog->author->name}}</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum magni ipsa
                                    fugiat pariatur! </p>
                            </div>
                        </div>
                        <div class="comment-section">

                                <div class="all-response">
                                    <a class="btn view-all-btn" data-toggle="collapse" href="#collapseExample" role="button"
                                       aria-expanded="false" aria-controls="collapseExample">
                                        View all comments ({{$count}})
                                    </a>
                                </div>
                                <div class="collapse" id="collapseExample">
                                    @foreach($comments as $comment)
                                    <div class="card comment-card">
                                        <div class="card-body">
                                            <div class="author-date">
                                                <div class="author">
                                                    <img src="{{asset($comment->user->image)}}" alt="" class="rounded-circle" />
                                                </div>
                                                <div class="inner-author-date">
                                                    <div class="author">
                                                        <span class="">{{$comment->user->name}}</span>
                                                    </div>
                                                    <div class="date"><span>{{date('F j, y',strtotime($comment->created_at)) }}</span></div>
                                                </div>
                                            </div>
                                            <div class="comment-text mt-2">
                                                <p>{{$comment->comment}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @if(Session::get('customerId'))
                                <form class="comment-form" action="{{route('save.comment')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                    <h5 >Leave a comment</h5>
                                    <h6 class="text-center text-success mb-5">{{session('message')}}</h6>
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-4">
                                            <input type="text" class="form-control" value="{{Session::get('customerName')}}" readonly>
                                        </div>
                                        <div class="col-12 col-md-6 mb-4">
                                            <input type="email" class="form-control" value="{{Session::get('customerEmail')}}" readonly>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <textarea rows="7" class="form-control" name="comment" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-solid">Submit</button>
                                </form>
                            @else
                                <h5 class="text-center"><a href="{{route('customer.login')}}" class="btn text-primary">Please Sign In to Comment</a></h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
