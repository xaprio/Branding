@extends('layouts.app')

@section('content')

<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Xapads | Branding</title>
      <!-- Favicon --> 
      <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/backend.css?v=1.0.01')}}">
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
                     <div class="logo text-center mt-c-3"><img src="{{asset('assets/images/logo-w.png')}}">
                     <h5 class="text-center mt-3 text-white">BESPOKE DISPLAY SOLUTIONS</h5>
                     </div>
                     <div class="bottom-aside"><img src="{{asset('assets/images/login-screen.png')}}"></div>
                        
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
                  
                            <h3 class="text-left  mb-1 mt-3">Forgotten Password ?</h3>
                           <p class="mb-0 text-left mb-5 text-light font-bold">Enter your email to reset your password</a></p>
                           <form class="needs-validation" novalidate method="POST" action="{{ route('password.email') }}">
                                @csrf
                                  <div class="form-group">
                                       <label class="text-secondary">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                    </svg>                                         
                                               </span>
                                            </div>
                                            <input class="form-control" type="email" required>
                                            <div class="invalid-feedback"> Email is required. </div>
                                         </div>     
                                         </div>         
                             <div class="form-group">
                              <button type="submit" class="btn-block btn btn-primary mt-2">Submit</button>
                              
                                <p class="mt-2 text-center">Do you have an account? <a href="{{ route('login') }}">Sign In</a> or <a href="{{ route('register') }}">Create an Account</a></p>
                           </div>
                       </form> 
                        
                  </div>
               </div>
            
               
               </div>
            
            </div>
        </div>
      
        
      
      </div>
      <!-- Backend Bundle JavaScript -->
      <script src="{{asset('assets/js/backend-bundle.min.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('assets/js/customizer.js')}}"></script>
      <script src="{{asset('assets/js/sidebar.js')}}"></script>
      <!-- Flextree Javascript-->
      <script src="{{asset('assets/js/flex-tree.min.js')}}"></script>
      <script src="{{asset('assets/js/tree.js')}}"></script>
      <!-- Table Treeview JavaScript -->
      <script src="{{asset('assets/js/table-treeview.js')}}"></script>
      <!-- SweetAlert JavaScript -->
      <script src="{{asset('assets/js/sweetalert.js')}}"></script>
      <!-- Vectoe Map JavaScript -->
      <script src="{{asset('assets/js/vector-map-custom.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('assets/js/chart-custom.js')}}"></script>
      <script src="{{asset('assets/js/charts/01.js')}}"></script>
      <script src="{{asset('assets/js/charts/02.js')}}"></script>
      <!-- slider JavaScript -->
      <script src="{{asset('assets/js/slider.js')}}"></script>
      <!-- app JavaScript -->
      <script src="{{asset('assets/js/app.js')}}"></script>  
   </body>
</html>



@endsection
