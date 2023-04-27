<div class="sticky-sidebar">
    <div class="sticky-sidebar-content">
        <div class="close-sidebar ml-auto">
            <i class="fas fa-times"></i>
        </div>
        <div class="brand-name">
            <a href="#">
                <h1>Kavya</h1>
            </a>
        </div>

        @if(Session::get('customerId'))
            <h3>About the Author</h3>

            <div class="author-img">
                <img src="{{asset('front-end-asset')}}/assets/images/default-image.png">
            </div>
            <div class="author-desc">
                <h5 class="mb-2">{{Session::get('customerName')}}</h5>
            </div>

            <div class="col-md-6 offset-3"><a href="{{route('customer.logout')}}" class="btn btn-outline-primary">Log Out</a></div>
        @else
            <h3>Sign Up</h3>
            <a href="{{route('register')}}" class="btn">Sign Up As Admin</a>
            <a href="{{route('customer.register')}}" class="btn">Sign Up As User</a>

            <h6 class="my-5"><u>Already have an Account?</u></h6>

            <h3>Sign In</h3>
            <a href="{{route('login')}}" class="btn">Sign In As Admin</a> <br>
            <a href="{{route('customer.login')}}" class="btn">Sign In As User</a>
        @endif

    </div>
</div>
