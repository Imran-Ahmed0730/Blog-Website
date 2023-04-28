@extends('front-end.master')
@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h2>About</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page header end -->
    <!-- About section -->
    <section class="about-section">
        <div class="container">
            <div class="about-inner">
                <div class="row no-gutters">
                    <div class="col-md-7">
                        <div class="about-text">
                            <h3 class="about-title">About Website</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur beatae tempora molestiae, sed
                                aspernatur natus accusantium temporibus corrupti nam magni nulla recusandae similique atque,
                                repellendus facere repellat veniam quam provident. Lorem ipsum dolor sit amet consectetur, adipisicing
                                elit. Soluta, perferendis.</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="about-img">
                            <img src="{{asset('front-end-asset')}}/assets/images/about.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div class="about-inner-2">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-7">
                        <div class="about-img">
                            <img src="{{asset('front-end-asset')}}/assets/images/beautiful-girl.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="about-text">
                            <h3 class="about-title">About Designer</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur beatae tempora molestiae, sed
                                aspernatur natus accusantium temporibus corrupti nam magni nulla recusandae similique atque,
                                repellendus facere repellat veniam quam provident.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section -->
    <!-- Author section -->
    <section class="author-section">
        <div class="container">
            <h2>Meet our authors</h2>
            <div class="row">
                @foreach($authors as $author)
                    <div class="col-md-6 col-lg-3">
                        <div class="card author-card">
                            <div class="card-img">
                                <img src="{{asset($author->image)}}" alt="">
                            </div>
                            <h5><a href="{{route('about.author', ['id'=>$author->id])}}">{{$author->name}}</a></h5>
                            <small>Chief author</small>
                            <p class="card-text">{{$author->description}}</p>

                            <div class="social-links circular-icons">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
