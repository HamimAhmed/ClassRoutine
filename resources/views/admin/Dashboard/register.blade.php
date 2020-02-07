{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<!------ Include the above in your HEAD tag ---------->--}}

{{--<style>--}}
    {{--.val_error{--}}
        {{--color: #721c24;--}}
    {{--}--}}
{{--</style>--}}
{{--<script type="text/javascript">--}}

    {{--var username = document.forms["vaform"]["username"];--}}



    {{--var name_error = document.getElementById("name_error");--}}



    {{--username.addEventListener("blur", nameVarify, true);--}}


    {{--function validate()--}}
    {{--{--}}
        {{--if (usernmae.value === ""){--}}
            {{--username.style.border = " 1px solid red";--}}
            {{--name_error.textContent = "user name is required";--}}
            {{--username.focus();--}}
            {{--return false;--}}
        {{--}--}}
    {{--}--}}
{{--</script>--}}


{{--<div class="container mt-5">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header bg-info text-white">Create Your Account</div>--}}
                {{--<div class="card-body">--}}

                    {{--<form class="form-horizontal" method="post" action="{{ route('register') }}" enctype="multipart/form-data">--}}

                        {{--@csrf--}}

                        {{--@if ($errors->any())--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--<ul>--}}
                                    {{--@foreach ($errors->all() as $error)--}}
                                        {{--<li>{{ $error }}</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--@if (session()->has('message'))--}}
                            {{--<div class="alert alert-{{session('type')}}">--}}
                                {{--{{session('message')}}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="name" class="cols-sm-2 control-label">Your Name</label>--}}
                            {{--<div class="cols-sm-10">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>--}}
                                    {{--<input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" />--}}
                                    {{--<div id="name_error" class="val_error"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="email" class="cols-sm-2 control-label">Your Email</label>--}}
                            {{--<div class="cols-sm-10">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>--}}
                                    {{--<input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="username" class="cols-sm-2 control-label">Mobile No</label>--}}
                            {{--<div class="cols-sm-10">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>--}}
                                    {{--<input type="text" class="form-control" name="mobile_no" id="mobile_no" placeholder="Enter your Mobile No" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="password" class="cols-sm-2 control-label">Password</label>--}}
                            {{--<div class="cols-sm-10">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>--}}
                                    {{--<input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="username" class="cols-sm-2 control-label">Profile Image</label>--}}
                            {{--<div class="cols-sm-10">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>--}}
                                    {{--<input type="file" class="form-control" name="image" id="image" placeholder="Provide your profile image" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group ">--}}
                            {{--<button  class="btn btn-info btn-lg btn-block login-button">Register</button>--}}
                        {{--</div>--}}
                        {{--<div class="login-register">--}}
                            {{--<a class="btn btn-success" href="{{route('login')}}">Login</a>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Create Account</title>
</head>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>Registration</h1>
    </div>
    <div class="login-box">
        <form class="login-form" action="{{ route('register') }}" enctype="multipart/form-data" method="post">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->has('message'))
                <div class="alert alert-{{session('type')}}">
                    {{session('message')}}
                </div>
            @endif


            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>

            <div class="form-group">
                <label class="control-label">Your Name</label>
                <input class="form-control" name="name" type="text" placeholder="Enter Your Name" autofocus>
            </div>
            <div class="form-group">
                <label class="control-label">Mobile No</label>
                <input class="form-control" name="mobile_no" type="text" placeholder="Mobile No" autofocus>
            </div>
            <div class="form-group">
                <label class="control-label">Email Address</label>
                <input class="form-control" name="email" type="email" placeholder="Email" autofocus>
            </div>
            <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <input class="form-control" name="password" type="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label class="control-label">Profile Image</label>
                <input class="form-control" name="image" type="file" placeholder="Profile Image">
            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                    </div>
                    <p class="semibold-text mb-2"><a href="{{ route('login') }}" data-toggle="">lOG in ! </a>
                    </p>
                </div>
            </div>


            <div class="form-group btn-container">
                <button class="btn btn-primary"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN UP</button>
                {{--<button class="btn btn-info">sign UP</button>--}}
            </div>
        </form>
    </div>
</section>
<!-- Essential javascripts for application to work-->
<script src="{{asset('backend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('backend/js/plugins/pace.min.js')}}"></script>
<script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function () {
        $('.login-box').toggleClass('flipped');
        return false;
    });
</script>
</body>
</html>





