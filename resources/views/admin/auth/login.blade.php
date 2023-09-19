@include("includes.head")

<body>

<!-- Header Start --> 

@include("includes.nav")

<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-1">
  
</section>
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <form id="login-form" class="form login__form" action="/processes/backend/admin/login" method="POST">
        		@csrf
                <!-- end message -->
                <h3 class="text-md ">Sign in</h3>
                <p class="mb-5">Sign into your account.</p>

                @if(session("message"))
                    <div class="alert alert-danger">{{ session("message") }}</div>
                @endif

                <div class="form-group">
                	<label>Email</label>
                	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                	 @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                	<label>Password</label>
                	<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                	 @error('password')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                   <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                       </label>
                    </div>
                </div>

                <div class="form-group">
                	<button class="btn btn-md btn-main">Sign in</button>

                	@if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                          </a>
                    @endif
                </div>

            </form>
            </div>  
        </div>
    </div>
</section>

   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/aos/aos.js"></script>
    <script src="plugins/animate-css/wow.min.js"></script>
    <script src="plugins/modal-video/jquery-modal-video.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&amp;callback=initMap"></script>    
    
    <script src="js/script.js"></script>

  </body>
  
<!-- Mirrored from demo.themefisher.com/enov/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 13:05:04 GMT -->
</html>