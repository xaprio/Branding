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
                          

                            <h3 class="text-left  mb-1 mt-3">Forgotten Password ?</h3>
                           <p class="mb-0 text-left mb-5 text-light font-bold">Enter your email to reset your password</a></p>
                           <form class="needs-validation" novalidate method="POST" action="{{ URL::to('/forgot') }}">
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
                                            <input class="form-control" type="text" name="email" required>
                                            <div class="invalid-feedback"> Email is required. </div>
                                         </div>

                                          <div style="color: red;">
                                        {{ $errors->first('email') }} 
                                    </div>      
                                         </div>         
                             <div class="form-group">
                              <button type="submit" class="btn-block btn btn-primary mt-2">Submit</button>
                              
                                <p class="mt-2 text-center">Do you have an account? <a href="{{ URL::to('/login') }}">Sign In</a> or <a href="{{ URL::to('/signup') }}">Create an Account</a></p>
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
  title: "Success ",
  message: "Registered Succesfully",
  buttonText: "Okay"
});
  @elseif(Session::has('failure'))
  cuteAlert({
  type: "error",
  title: "Email failed ",
  message: "Invailid email Id",
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
