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
      <link rel="stylesheet" href="{{asset('public/assets/css/backend.css?v=1.0.0121')}}">
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
                         <!-- @if(Session::has('message'))
                               <div class="alert alert-success">
                                <h4>{{ Session::get('message')}}</h4>
                              </div>
                              @endif

                               @if(Session::has('failure'))
                               <div class="alert alert-danger">
                                <h4>{{ Session::get('failure')}}</h4>
                              </div>
                              @endif

 -->
                           <h3 class="text-left  mb-1 mt-3">Welcome to Xapads</h3>
                           <p class="mb-0 text-left mb-5 text-light font-bold">New Here? <a href="{{URL::to('/signup')}}">Create an Account</a></p>
                          <form class="needs-validation" novalidate  method="POST" action="{{URL::to('/login')}}">
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
                                            <input class="form-control" type="email" name="email"  id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                             
                                    

                                            <div class="invalid-feedback">Username is required </div>

                                         </div> 
                                         <div style="color: red;">
                                        {{ $errors->first('email') }} 
                                    </div>    
                                         </div>                                                                  
                                
                                    <div class="form-group">
                                       
                                        <div class="d-flex justify-content-between align-items-center">
                                          <label class="text-secondary">Password</label>
                                          <label>
                                             
                                            <a href="{{ URL::to('/forgot') }}">Forgot Password?</a>
                                             
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
                                             <input class="form-control" type="password" name="password" required >
                                             <div class="invalid-feedback"> Password is required. </div>
                                         </div>  
                                             <div style="color: red;">
                                        {{ $errors->first('password') }} 
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
       
    <script src="{{asset('public/assets/js/backend-bundle.min.js?i=1v')}}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('public/assets/js/customizer.js?i=1v')}}"></script>
    
    <script src="{{asset('public/assets/js/sidebar.js?i=1v')}}"></script>
    
    <!-- Flextree Javascript-->
    <script src="{{asset('public/assets/js/flex-tree.min.js?i=1v')}}"></script>
    <script src="{{asset('public/assets/js/tree.js?i=1v')}}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{asset('public/assets/js/table-treeview.js?i=1v')}}"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('public/assets/js/sweetalert.js?i=1v')}}"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="{{asset('public/assets/js/vector-map-custom.js?i=1v')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('public/assets/js/chart-custom.js?i=1v')}}"></script>
    <script src="{{asset('public/assets/js/charts/01.js?i=1v')}}"></script>
    <script src="{{asset('public/assets/js/charts/02.js?i=1v')}}"></script>
    
    <!-- slider JavaScript -->
    <script src="{{asset('public/assets/js/slider.js?i=1v')}}"></script>
    
    <!-- Emoji picker -->
    <script src="{{asset('public/assets/vendor/emoji-picker-element/index.js')}}" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="{{asset('public/assets/js/app.js?i=1v')}}"></script>

    
    <script src="{{asset('public/assets/cute-alert.js')}}"></script>
    <script type="text/javascript">
      
$(document).ready(function() {
  @if(Session::has('message'))
  cuteAlert({
  type: "success",
  title: "Success ",
  message: "Registered Succesfully",
  buttonText: "Okay"
});
  @elseif(Session::has('failure'))
  cuteAlert({
  type: "error",
  title: "Authentication failed ",
  message: "Incorrect login credentials",
  buttonText: "Okay"
  });
    @elseif(Session::has('logout'))
  cuteAlert({
  type: "success",
  title: "Logout ",
  message: "Logout Succesfully",
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
