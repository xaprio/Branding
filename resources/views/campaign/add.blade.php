@include('layouts.sidebar');

@include('layouts.header');
<div class="content-page">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 pl-0 pt-0">
<li class="breadcrumb-item"><a href="#"><i class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Advertiser Listing</li>
</ol>
</nav>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-2">
<div class="d-flex align-items-center justify-content-between">
<h4 class="font-weight-bold">
<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
</svg>
Add Campaign</h4>
</div>
<div class="create-workform">
<div class="d-flex flex-wrap align-items-center justify-content-between">
<button type="submit" class="btn btn-primary mr-2">Submit</button>
<button type="submit" class="btn bg-danger">Cancel</button>
</div>
</div>
</div>
</div>
<div class="col-md-12 mb-4 mt-1">
<form action="">
<div class="card">
<div class="card-header d-flex justify-content-between">
<div class="header-title">
<h4 class="card-title">
Campaign Information
</h4>
</div>
</div>
<div class="card-body">
<div class="form-group row">
<label class="col-sm-2"></label>
<label class="control-label col-sm-2 align-self-center text-lg-right text-left">Advertiser: </label>
<div class="col-sm-5 required">
<select class="form-control  choicesjs">
<option>Advertiser Name</option>
<option>Advertiser Name</option>
<option>Advertiser Name</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2"></label>
<label class="control-label col-sm-2 align-self-center text-lg-right text-left">Campaign Name: </label>
<div class="col-sm-5">
<input type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2"></label>
<label class="control-label col-sm-2 align-self-center text-lg-right text-left">Pricing Model: </label>
<div class="col-sm-5">
<select class="form-control  choicesjs">
<option>CPC</option>
<option>CPV</option>
<option>CPM</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2"></label>
<label class="control-label col-sm-2 align-self-center text-lg-right text-left">Start Date:</label>
<div class="col-sm-5">
<div class="form-group m-0">
<input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
</div>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2"></label>
<label class="control-label col-sm-2 align-self-center text-lg-right text-left">End Date:</label>
<div class="col-sm-5">
<div class="form-group m-0">
<input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
</div>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2"></label>
<label class="control-label col-sm-2 align-self-center text-lg-right text-left">Enabled:</label>
<div class="col-sm-5">
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input">
<label class="custom-control-label" for="customRadio6"> Enable </label>
</div>
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">
<label class="custom-control-label" for="customRadio7"> Disable </label>
</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-header d-flex justify-content-between">
<div class="header-title">
<h4 class="card-title">
More Information
</h4>
</div>
</div>
<div class="card-body">
<div class="form-group row">
<label class="col-sm-2"></label>
<label class="control-label col-sm-2 align-self-center text-lg-right text-left"> Description:</label>
<div class="col-sm-5">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2"></label>
<label class="control-label col-sm-2 align-self-center text-lg-right text-left"> Company:</label>
<div class="col-sm-5">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</div>
</div>
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

<script src="{{asset('public/assets/vendor/emoji-picker-element/index.js')}}" type="module"></script>

<script src="{{asset('public/assets/js/app.js')}}"></script>
</body>
</html>