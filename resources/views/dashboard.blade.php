@include('layouts.sidebar');

@include('layouts.header');



<div class="content-page">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 mb-4 mt-1">
<div class="d-flex flex-wrap justify-content-between align-items-center">
<h4 class="font-weight-bold">Overview</h4>
</div>
</div>
<div class="col-lg-8 col-md-12">
<div class="row">
<div class="col-md-4">
<div class="card">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="">
<p class="mb-2 text-secondary">Total Offers</p>
<div class="d-flex flex-wrap justify-content-start align-items-center">
<h5 class="mb-0 font-weight-bold">1,245</h5>
<p class="mb-0 ml-3 text-success font-weight-bold">+3.55%</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="">
<p class="mb-2 text-secondary">Total Campaigns</p>
<div class="d-flex flex-wrap justify-content-start align-items-center">
<h5 class="mb-0 font-weight-bold">721</h5>
<p class="mb-0 ml-3 text-success font-weight-bold">+2.67%</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="">
<p class="mb-2 text-secondary">New Advertiser</p>
<div class="d-flex flex-wrap justify-content-start align-items-center">
<h5 class="mb-0 font-weight-bold">12</h5>
<p class="mb-0 ml-3 text-danger font-weight-bold">-9.98%</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between align-items-center flex-wrap">
<h4 class="font-weight-bold">Sales Report</h4>
<div class="d-flex justify-content-between align-items-center">
<div>
<svg width="24" height="24" viewBox="0 0 24 24" fill="primary" xmlns="http://www.w3.org/2000/svg">
<rect x="3" y="3" width="18" height="18" rx="2" fill="#3378FF" />
</svg>
<span>Incomes</span>
</div>
<div class="ml-3">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="3" y="3" width="18" height="18" rx="2" fill="#19b3b3" />
</svg>
<span>Expenses</span>
</div>
</div>
</div>
<div id="chart-apex-column-01" class="custom-chart"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="row">
<div class="col-md-12">
<div class="card bg-primary">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="fit-icon-2 text-info text-center">
<div id="circle-progress-01" class="circle-progress-01 circle-progress circle-progress-light" data-min-value="0" data-max-value="100" data-value="62" data-type="percent"></div>
</div>
<div class="ml-3">
<h5 class="text-white font-weight-bold">1,860 <small> /3k Target</small></h5>
<small class="mb-0">Order In Period</small>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between align-items-center">
<h6 class="font-weight-bold">Active Users</h6>
<div class="d-flex align-items-center">
<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
</svg>
<span class=" font-weight-bold">200</span>
 </div>
</div>
<p class="mb-0">Pages views per day</p>
<div id="chart-apex-column-02" class="custom-chart"></div>
<div class="d-flex justify-content-between align-items-center">
<p class="mb-0 pt-3 ">25 June</p>
<p class="mb-0 pt-3 ">26 June</p>
<p class="mb-0 pt-3 ">27 June</p>
</div>
</div>
</div>
</div>
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


 <script src="{{asset('public/assets/cute-alert.js')}}"></script>
    <script type="text/javascript">
      
$(document).ready(function() {
  @if(Session::has('message'))
  cuteAlert({
  type: "success",
  title: "Sing-In",
  message: "Login successfully",
  buttonText: "Okay"
});
  @elseif(Session::has('failure'))
  cuteAlert({
  type: "error",
  title: "Authentication failed ",
  message: "Incorrect login credentials",
  buttonText: "Okay"
  });
  @else
  // do some other thing;
@endif

});
    </script>


</body>
</html>