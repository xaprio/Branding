@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Xapads | Branding</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico" />
      <link rel="stylesheet" href="assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="assets/css/backend.css?v=1.0.0121">
   </head>
   <body >
   
   <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
   
      <div class="wrapper">
        <div class="d-flex flex-column flex-root">
            <div class="login login-1 d-flex flex-column flex-lg-row flex-column-fluid bg-white">
               <div class=" login-aside d-flex flex-column flex-row-auto bg-annimation">
                     <div class="logo text-center mt-c-3"><img src="assets/images/logo-w.png">
                     <h5 class="text-center mt-3 text-white">BESPOKE DISPLAY SOLUTIONS</h5>
                     </div>
                     <div class="bottom-aside"><img src="assets/images/login-screen.png"></div>
                        
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
                  
                           <h3 class="text-left  mb-1 mt-3">Welcome to Xapads</h3>
                           <p class="mb-0 text-left mb-5 text-light font-bold">New Here? <a href="{{ route('register') }}">Create an Account</a></p>
                          <form class="needs-validation" novalidate  method="POST" action="{{ route('login') }}">
                               @csrf
                                    <div class="form-group">
                                       <label class="text-secondary">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                    </svg>                                             
                                               </span>
                                            </div>
                                            <input class="form-control" type="email"  id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">Username is required </div>
                                         </div>     
                                         </div>                                                                  
                                
                                    <div class="form-group">
                                       
                                        <div class="d-flex justify-content-between align-items-center">
                                          <label class="text-secondary">Password</label>
                                          <label>
                                             @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                              @endif
                                        </label>
                                       </div>
                                       
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                    </svg>                                         
                                               </span>
                                            </div>
                                             <input class="form-control" type="password" required >
                                             <div class="invalid-feedback"> Password is required. </div>
                                         </div>     
                                         </div>                                                                  
                                 <div class="form-group">
                                <button type="submit" class="btn-block btn btn-primary mt-2" id="loginForm">Sign In</button>
                                </div>
                               </form> 
                        
                  </div>
               </div>
                </div>
                              </div>
            
               
               </div>
            
            </div>
       
    <script src="assets/js/backend-bundle.min.js?i=1v"></script>
    <!-- Chart Custom JavaScript -->
    <script src="assets/js/customizer.js?i=1v"></script>
    
    <script src="assets/js/sidebar.js?i=1v"></script>
    
    <!-- Flextree Javascript-->
    <script src="assets/js/flex-tree.min.js?i=1v"></script>
    <script src="assets/js/tree.js?i=1v"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="assets/js/table-treeview.js?i=1v"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="assets/js/sweetalert.js?i=1v"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="assets/js/vector-map-custom.js?i=1v"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="assets/js/chart-custom.js?i=1v"></script>
    <script src="assets/js/charts/01.js?i=1v"></script>
    <script src="assets/js/charts/02.js?i=1v"></script>
    
    <!-- slider JavaScript -->
    <script src="assets/js/slider.js?i=1v"></script>
    
    <!-- Emoji picker -->
    <script src="assets/vendor/emoji-picker-element/index.js" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="assets/js/app.js?i=1v"></script>
   </body>
</html>

@endsection
