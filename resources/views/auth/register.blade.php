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
      <link rel="stylesheet" href="assets/css/backend.css?v=1.0.01">
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
                  
                            <h3 class="text-left  mb-1 mt-3">Create your Account</h3>
                          <p class="mb-0 text-left mb-5 text-light font-bold">Enter your details to create your account</a></p>
                             <form class="needs-validation" novalidate method="POST" action="{{ route('register') }}">

                                 @csrf
                           
                                <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                    </svg>                                         
                                               </span>
                                            </div>
                                            <input class="form-control" type="name" name="name" placeholder="Name" required>

                                             @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                
                                            <div class="invalid-feedback">Name is required </div>
                                         </div>     
                                         </div> 


                            
                                 <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                                    </svg>                                         
                                               </span>
                                            </div>
                                            <input class="form-control" type="email" name="email" placeholder="Email" required>
                                            <div class="invalid-feedback">Email is required </div>
                                         </div>     
                                         </div>     
                             
                                 <div class="form-group">
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                    <input class="form-control" type="password" name="password" placeholder="Password" required="">
                                    <div class="invalid-feedback">Password is required </div>
                                    </div></div>
                            
                                 <div class="form-group">
                                           <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                    <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                                    <div class="invalid-feedback">Confirm Password is required </div>
                                    </div></div>
                            
                                   <div class="form-check form-check-inline">
                                       <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                          <input type="checkbox" class="custom-control-input m-0" id="invalidCheck" required>
                                          <label class="custom-control-label pl-2" for="invalidCheck">I agree to the <a href="terms-of-service.html">Terms of Service </a> and <a href="privacy-policy.html">Privacy Policy</a></label>
                                       </div>
                                        <div class="invalid-feedback"> You must agree before submitting. </div>
                                    </div>
                                    
                           
                           
                         
                          <div class="form-group">
                          <button type="submit" class="btn-block btn btn-primary mt-2">Create Account</button>
                                <p class="mt-1 text-center">Do you have an account? <a href="{{ route('login') }}">Sign In</a></p>
                                 </div>
                           
                        </form>
                        
                  </div>
               </div>
            
               
               </div>
            
            </div>
        </div>
      
        
      
      </div>
      <!-- Backend Bundle JavaScript -->
      <script src="assets/js/backend-bundle.min.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="assets/js/customizer.js"></script>
      <script src="assets/js/sidebar.js"></script>
      <!-- Flextree Javascript-->
      <script src="assets/js/flex-tree.min.js"></script>
      <script src="assets/js/tree.js"></script>
      <!-- Table Treeview JavaScript -->
      <script src="assets/js/table-treeview.js"></script>
      <!-- SweetAlert JavaScript -->
      <script src="assets/js/sweetalert.js"></script>
      <!-- Vectoe Map JavaScript -->
      <script src="assets/js/vector-map-custom.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="assets/js/chart-custom.js"></script>
      <script src="assets/js/charts/01.js"></script>
      <script src="assets/js/charts/02.js"></script>
      <!-- slider JavaScript -->
      <script src="assets/js/slider.js"></script>
      <!-- app JavaScript -->
      <script src="assets/js/app.js"></script>  
   </body>
</html>


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
