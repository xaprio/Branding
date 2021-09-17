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
<svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path strokelinecap="round" strokelinejoin="round" strokewidth="{2}" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
</svg>
Advertiser Listing</h4>
</div>
<div class="create-workform">
<div class="d-flex flex-wrap align-items-center justify-content-between">
<div class="modal-product-search d-flex">
<a href="{{URL::to('add-advertiser')}}" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
</svg>
Add Advertiser
</a>
</div>
</div>
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
<th class="text-center">Id</th>
<th class="text-center">Name</th>
<th class="text-center">Company</th>
<th class="text-center">Status</th>
<th class="text-center">Current Balance</th>
<th class="text-center">Campaigns</th>
<th class="text-center">Payment Transactions</th>
<th class="text-right">Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6c5ced4cfd5d2cfc7c888e4c7cac3e6c4cad3c3c4c3d4d4dfc388c5c9cb">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-primary-light mt-2">New</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
<td>
<div class="text-center">
<a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{URL::to('edit-advertiser')}}">
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e3d362c372d2a373f30701c3f323b1e3c322b3b3c3b2c2c273b703d3133">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-success-light mt-2">Approved</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8be8e3f9e2f8ffe2eae5a5c9eae7eecbe9e7feeee9eef9f9f2eea5e8e4e6">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-warning-light mt-2">Declined </span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="35565d475c46415c545b1b775459507557594050575047474c501b565a58">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-secondary-light mt-2">Suspended</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e5868d978c96918c848bcba7848980a587899080878097979c80cb868a88">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-danger-light mt-2">Blocked </span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81e2e9f3e8f2f5e8e0efafc3e0ede4c1e3edf4e4e3e4f3f3f8e4afe2eeec">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-primary-light mt-2">New</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ddbeb5afb4aea9b4bcb3f39fbcb1b89dbfb1a8b8bfb8afafa4b8f3beb2b0">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-success-light mt-2">Approved</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="25464d574c56514c444b0b674449406547495040474057575c400b464a48">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-warning-light mt-2">Declined </span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7c4cfd5ced4d3cec6c989e5c6cbc2e7c5cbd2c2c5c2d5d5dec289c4c8ca">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-secondary-light mt-2">Suspended</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6003081209131409010e4e22010c0520020c15050205121219054e030f0d">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-danger-light mt-2">Blocked </span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fa99928893898e939b94d4b89b969fba98968f9f989f8888839fd4999597">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-primary-light mt-2">New</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="593a312b302a2d303837771b38353c193b352c3c3b3c2b2b203c773a3634">[email&#160;protected]</a>
</p>
</div>
 </div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-success-light mt-2">Approved</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b68637962787f626a6525496a676e4b69677e6e696e7979726e25686466">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-warning-light mt-2">Declined </span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
 <img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d6e657f647e79646c63234f6c61684d6f6178686f687f7f7468236e6260">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-secondary-light mt-2">Suspended</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="17747f657e64637e76793955767b7257757b6272757265656e723974787a">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-danger-light mt-2">Blocked </span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8cefe4fee5fff8e5ede2a2ceede0e9cceee0f9e9eee9fefef5e9a2efe3e1">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-primary-light mt-2">New</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5d6ddc7dcc6c1dcd4db9bf7d4d9d0f5d7d9c0d0d7d0c7c7ccd09bd6dad8">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-success-light mt-2">Approved</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8be8e3f9e2f8ffe2eae5a5c9eae7eecbe9e7feeee9eef9f9f2eea5e8e4e6">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-warning-light mt-2">Declined </span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb98938992888f929a95d5b99a979ebb99978e9e999e8989829ed5989496">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-secondary-light mt-2">Suspended</span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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
<td>12345</td>
<td>
<div class="active-project-1 d-flex align-items-center mt-0 ">
<div class="h-avatar is-medium">
<img class="avatar rounded-circle" alt="user-icon" src="{{asset('public/assets/images/user/1.jpg')}}">
</div>
<div class="data-content">
<div>
<span class="font-weight-bold">Christian Bale</span>
</div>
<p class="m-0 text-secondary small">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f2c273d263c3b262e21610d2e232a0f2d233a2a2d2a3d3d362a612c2022">[email&#160;protected]</a>
</p>
</div>
</div>
</td>
<td>Xapads Media</td>
<td><span class="badge bg-danger-light mt-2">Blocked </span></td>
<td class="text-right">$1,645</td>
<td class="text-center"><a href="">10</a></td>
<td class="text-center"><a href="">10</a></td>
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