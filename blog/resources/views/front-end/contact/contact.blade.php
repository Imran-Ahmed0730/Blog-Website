@extends('front-end.master')
@section('content')
    <div class="row m-5">
        <div class="col-md-10 offset-1">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('front-end-asset')}}/assets/images/beautiful-girl.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Merin Jones</h2>
                        </div>
                    </div>
                    <div class="row my-5 mx-2">
                        <div class="col-md-12">
                            <div class="rotate">
                                <h2 class="heading">Contact</h2>
                            </div>
                            <h5>Contact on: </h5> +1234567890
                            <h5>Email:</h5> kavya@gmail.com
                        </div>
                    </div>
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
