@extends('layouts.app')

@section('content')

<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Xapads | Branding</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('public/assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/assets/css/backend.css?v=1.0.01')}}">
      <link rel="stylesheet" href="{{asset('public/assets/style.css')}}" />
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
               @include('master.sidebar');
               <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                   <div class="row align-items-center justify-content-center h-100">
                  <div class="col-md-12">
                            <!--   @if(Session::has('message'))
                               <div class="alert alert-success">
                                <h4>{{ Session::get('message')}}</h4>
                              </div>
                              @endif

                               @if(Session::has('failure'))
                               <div class="alert alert-danger">
                                <h4>{{ Session::get('failure')}}</h4>
                              </div>
                              @endif -->


                            <h3 class="text-left  mb-1 mt-3">Create your Account</h3>
                          <p class="mb-0 text-left mb-5 text-light font-bold">Enter your details to create your account</a></p>
                             <form class="needs-validation" novalidate method="POST" action="{{URL::to('/signup')}}">

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
                                            <input class="form-control" type="name" name="company" value="{{ old('company') }}" placeholder="Company" required >

                                             @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                                @enderror


                                            <div class="invalid-feedback">Company is required</div>
                                         </div>     
                                </div> 

                                          <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                               <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                    </svg>                                         
                                               </span>
                                            </div>
                                            <input class="form-control @error('name') is-invalid @enderror" type="name" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                                             @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
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
                                            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                    <input class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="" >
                                    <div class="clearfix"></div>
                                 
                               
                                    <div class="invalid-feedback">Password is required </div>
                                    </div>
                                    @if($errors->has('password'))
                                      <span class="alert alert-error" role="alert">
                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                      </span>
                                    
                                    @endif
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
                                    <input class="form-control" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required>

                                    
                                    <span class="alert alert-error" role="alert">
                                        <strong style="color: red;">{{ $errors->first('password_confirmation') }}</strong>
                                      </span>
                                    
                                 


                                    <div class="invalid-feedback">Confirm Password is required </div>
                                    </div>
                                </div>
                            
                                   <div class="form-check form-check-inline">
                                       <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                          <input type="checkbox" name="term" class="custom-control-input m-0" id="invalidCheck" required>
                                          <label class="custom-control-label pl-2" for="invalidCheck">I agree to the <a href="terms-of-service.html">Terms of Service </a> and <a href="privacy-policy.html">Privacy Policy</a></label>
                                       </div>
                                        <div class="invalid-feedback"> You must agree before submitting. </div>
                                    </div>
                                    
                           
                           
                         
                          <div class="form-group">
                          <button type="submit" class="btn-block btn btn-primary mt-2">Create Account</button>
                                <p class="mt-1 text-center">Do you have an account? <a href="{{URL::to('/login')}}">Sign In</a></p>
                                 </div>
                           
                        </form>
                        
                  </div>
               </div>
            
               
               </div>
            
            </div>
        </div>
      
        
      
      </div>
      <!-- Backend Bundle JavaScript -->
      <script src="{{asset('public/assets/js/backend-bundle.min.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('public/assets/js/customizer.js')}}"></script>
      <script src="{{asset('public/assets/js/sidebar.js')}}"></script>
      <!-- Flextree Javascript-->
      <script src="{{asset('public/assets/js/flex-tree.min.js')}}"></script>
      <script src="{{asset('public/assets/js/tree.js')}}"></script>
      <!-- Table Treeview JavaScript -->
      <script src="{{asset('public/assets/js/table-treeview.js')}}"></script>
      <!-- SweetAlert JavaScript -->
      <script src="{{asset('public/assets/js/sweetalert.js')}}"></script>
      <!-- Vectoe Map JavaScript -->
      <script src="{{asset('public/assets/js/vector-map-custom.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('public/assets/js/chart-custom.js')}}"></script>
      <script src="{{asset('public/assets/js/charts/01.js')}}"></script>
      <script src="{{asset('public/assets/js/charts/02.js')}}"></script>
      <!-- slider JavaScript -->
      <script src="{{asset('public/assets/js/slider.js')}}"></script>
      <!-- app JavaScript -->
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
  title: "Authentication failed ",
  message: "Email is already exists. Please enter another email",
  buttonText: "Okay"
  });
  @else
 
@endif

});
    </script>
 
   </body>
</html>

@endsection
