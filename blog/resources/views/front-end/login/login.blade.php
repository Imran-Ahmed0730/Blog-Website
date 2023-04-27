@extends('front-end.master')
@section('content')
    <div class="row my-5">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h3 class="text-center">Sign In into Kavya</h3>
                        <h5 class="text-center text-warning">{{session('message')}}</h5>
                        <form class="register-form mt-3" action="{{route('customer.login')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <input type="text" name="user_name" class="form-control" placeholder="Enter Your Email or Phone Number">
                                </div>
                                <div class="col-md-12 mb-4">
                                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                                </div>
                            </div>
                            <button class="btn btn-solid form-control">Sign In</button>
                        </form>
                        <h6 class="text-center my-3">Don't Have An Account? <a href="{{route('customer.register')}}">Sign Up Now</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
