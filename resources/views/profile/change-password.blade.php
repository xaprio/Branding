@include('layouts.sidebar');

@include('layouts.header');
<div class="content-page">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 pl-0 pt-0">
<li class="breadcrumb-item"><a href="#"><i class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Change Password</li>
</ol>
</nav>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="d-flex flex-wrap align-items-center width-100 justify-content-between my-schedule mb-2">
<div class="d-flex align-items-center justify-content-between">
<h4 class="font-weight-bold">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="mr-1" viewBox="0 0 20 20" fill="currentColor">
<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
</svg>
Change Password
</h4>
</div>

</div>

<div class="card">
<div class="card-header d-flex justify-content-between">
<div class="header-title">
<h4 class="card-title">
Reset Your Password
</h4>

 @if(Session::has('message'))
   <div class="alert alert-success">
    <h4>{{ Session::get('message')}}</h4>
  </div>
  @endif

   @if(Session::has('failure'))
   <div class="alert alert-danger">
    <h4>{{ Session::get('failure')}}</h4>
  </div>
  @endif



</div>
</div>
<form class="needs-validation" novalidate method="POST" action="{{URL::to('/changePassword')}}">
	  @csrf
<div class="card-body">
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Current Password:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
</svg>
</span>
</div>
<input class="form-control required" type="password" name="oldPassword"  required>
<div class="invalid-feedback">Current Password is required. </div>
</div>
<div style="color: red;">
                                        {{ $errors->first('oldPassword') }} 
                                    </div>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">New Password:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
</svg>
</span>
</div>
<input class="form-control required" type="password" name="password" required >
<div class="invalid-feedback"> Password is required. </div>
 </div>

 <div style="color: red;">
                                        {{ $errors->first('password') }} 
                                    </div>
</div>
</div>
</div>

<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Confirme Password:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
</svg>
</span>
</div>
<input class="form-control required" type="password" name="confirmPassword" required >
<div class="invalid-feedback"> Confirme password is required. </div>
 </div>

  <div style="color: red;">
                                        {{ $errors->first('confirmPassword') }} 
                                    </div>

</div>
</div>
</div>

<div class="create-workform">
<button type="submit" class="btn btn-primary mr-2">Submit</button>
<button type="submit" class="btn btn-danger mr-2">Cancel</button>
</div>



</div>




</form>


</div>
</div>

</div>
</div>
</div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('public/assets/js/backend-bundle.min.js')}}"></script>

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