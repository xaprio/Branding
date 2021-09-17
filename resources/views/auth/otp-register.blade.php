@extends('layouts.app')

@section('content')
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Xapads | Branding</title>

<link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}" />
<link rel="stylesheet" href="{{asset('public/assets/css/backend-plugin.min.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/backend.css?v=1.0.01')}}">
<link rel="stylesheet" href="{{asset('public/assets/style.css')}}" />
</head>
<body>

<div id="loading">
<div id="loading-center">
</div>
</div>

<div class="wrapper">
<div class="d-flex flex-column flex-root">
<div class="login login-1 d-flex flex-column flex-lg-row flex-column-fluid bg-white">
<div class=" login-aside d-flex flex-column flex-row-auto bg-annimation">
<div class="logo text-center mt-c-3"><img src="{{asset('public/assets/images/logo-w.png')}}">
<h5 class="text-center mt-3 text-white">BESPOKE DISPLAY SOLUTIONS</h5>
</div>
<div class="bottom-aside"><img src="{{asset('public/assets/images/login-screen.png')}}"></div>
<ul class="bg-animation-box">
<li class="circle-box"></li>
<li class="corners-box-20"></li>
<li class="circle-box"></li>
<li class="corners-box-20"></li>
<li></li>
<li class="corners-box-35"></li>
<li class="circle-box"></li>
<li></li>
</ul>
</div>
<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
<div class="row align-items-center justify-content-center h-100">
<div class="col-md-12">

	 @if(Session::has('message'))
                               <div class="alert alert-success">
                                <h4>{{ Session::get('message')}}</h4>
                              </div>
                              @endif

                             <!--  @if(Session::has('failure'))
                               <div class="alert alert-danger">
                                <h4>{{ Session::get('failure')}}</h4>
                              </div>
                              @endif -->


<h3 class="text-left  mb-1 mt-3">Verification</h3>
<p class="mb-0 text-left mb-5 text-light font-bold">Enter your 6-digit verification code</a></p>
<form class="needs-validation" novalidate method="POST" action="{{URL::to('/otp')}}">
	  @csrf
<div class="form-group">
<label class="text-secondary">Code</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
</svg>
</span>
</div>
<input class="form-control" type="text" name="otp" required value="{{ old('otp') }}" placeholder="Enter OTP">

 @error('otp')
            <span class="invalid-feedback" role="alert">
                <strong style="color: red">{{ $message }}</strong>
            </span>
        @enderror




<div class="invalid-feedback"> 6-digit verification code is required. </div>

</div>
 @if($errors->has('otp'))
  <span class="alert alert-error" role="alert">
    <strong style="color: red;">{{ $errors->first('otp') }}</strong>
  </span>

@endif



</div>
<div class="form-group">
<button type="submit" class="btn-block btn btn-primary mt-2">Submit</button>
<p class="mt-2 text-center">Do you have an account? <a href="{{URL::to('advertiser/login')}}">Sign In</a> or <a href="auth-sign-up-1.html">Create an Account</a></p>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="{{asset('public/assets/js/backend-bundle.min.js')}}"></script>

<script src="{{asset('public/assets/js/customizer.js')}}"></script>
<script src="{{asset('public/assets/js/sidebar.js')}}"></script>

<script src="{{asset('public/assets/js/flex-tree.min.js')}}"></script>
<script src="{{asset('public/assets/js/tree.js')}}"></script>

<script src="{{asset('public/assets/js/table-treeview.js')}}"></script>

<script src="{{asset('public/assets/js/sweetalert.js')}}"></script>

<script src="{{asset('public/assets/js/vector-map-custom.js')}}"></script>

<script src="{{asset('public/assets/js/chart-custom.js')}}"></script>
<script src="{{asset('public/assets/js/charts/01.js')}}"></script>
<script src="{{asset('public/assets/js/charts/02.js')}}"></script>

<script src="{{asset('public/assets/js/slider.js')}}"></script>

<script src="{{asset('public/assets/js/app.js')}}"></script>

  
    <script src="{{asset('public/assets/cute-alert.js')}}"></script>
    <script type="text/javascript">
      
$(document).ready(function() {
  @if(Session::has('message'))
  cuteAlert({
  type: "success",
  title: "Success",
  message: "Record has been inserted successfully",
  buttonText: "Okay"
});
  @elseif(Session::has('failure'))
  cuteAlert({
  type: "error",
  title: "Otp failed ",
  message: "Otp is not valid/expired",
  buttonText: "Okay"
  });
  @else
  // do some other thing;
@endif

});
    </script>


</body>
</html>
@endsection