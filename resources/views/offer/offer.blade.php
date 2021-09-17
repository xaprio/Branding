@include('layouts.sidebar');

@include('layouts.header');
<div class="content-page">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 pl-0 pt-0">
<li class="breadcrumb-item"><a href="#"><i class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Offer Listing</li>
</ol>
</nav>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-2">
<div class="d-flex align-items-center justify-content-between">
<h4 class="font-weight-bold">
<svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
</svg>
Offer Listing</h4>
</div>
</div>
</div>
<div class="col-md-12 mb-4">
<div class="card">
<div class="card-header d-flex justify-content-between">
<h5 class="font-weight-bold"></h5>
<div class="create-workform">
<div class="d-flex align-items-center justify-content-between">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search Here" aria-label="search" aria-describedby="basic-addon1">
</div>
<div class="input-group ml-3">
<select class="form-control choicesjs remove-search">
<option>Select Below</option>
<option>Select Below</option>
<option>Select Below</option>
<option>Select Below</option>
<option>Select Below</option>
<option>Select Below</option>
</select>
</div>
<button class="btn btn-primary ml-3"> Apply</button>
</div>
</div>
</div>
<div class="card-body p-0">
<table id="datatable" class="table data-table mb-0 dataTable no-footer" cellpadding="0" cellspacing="0">
 <thead class="table-color-heading">
<tr>
<th class="text-center">Offer Id</th>
<th class="text-center">Offer Name</th>
<th class="text-center">Advertiser Id</th>
<th class="text-center">Advertiser Name</th>
<th class="text-center">Campaign Id</th>
<th class="text-center">Campaign Name</th>
<th class="text-right">Status</th>
<th class="text-right">Ads</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
 </a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-secondary-light mt-2">Disabled </span></td> 
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
<tr>
<td class="text-center">12345</td>
<td>Demo Tester </td>
<td class="text-center">12345</td>
<td>Xapads Media</td>
<td class="text-center">12345</td>
<td class="text-left">Demo Tester</td>
<td class="text-center"><span class="badge bg-success-light mt-2">Enabled</span></td>
<td class="text-center">100</td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="">
<svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
</svg></a>
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
</a>
</div>
</td>
</tr>
</tbody>
</table>
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
<script>
         $('#datatable').dataTable({
            
             "bLengthChange" : false, //thought this line could hide the LengthMenu
             "bInfo":false,
              "searching": false,      
         });
		 
	  </script>
</body>
</html>