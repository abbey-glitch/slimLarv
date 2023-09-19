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
                <form id="login-form" class="form login__form" action="{{ route('login') }}" method="POST">
        		@csrf
                <!-- end message -->
                <h3 class="text-md ">Sign in</h3>
                <p class="mb-5">Sign into your account.</p>

                <div class="form-group">
                	<label>Email</label>
                	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                	 @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                	<label>Password</label>
                	<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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




               <hr>
               <h6>Not Registered? <a href="{{ route('register') }}"><u>Register now</u></a></h6>
            </form>
            </div>  
        </div>
    </div>
</section>

<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<div class="logo mb-4">
						<h3 class="text-white">Sul<span>fur.</span></h3>
					</div>
					<a href="tel:+23-345-67890" class="text-white">Support@sulfur.com</a>
					<p class="mt-4 mb-3">290 Maryam Springs 260,Courbevoie, Paris, France</p>
					<a href="tel:+23-456-6588"><span class="text-white h4">+23-456-6588</span></a>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget text-white">
					<h4 class="text-capitalize mb-4 text-white">Company</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4 text-white">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4 text-white">Follow us</h4>
					<ul class="list-unstyled footer-socials">
						<li><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2 text-muted"></i>facebook</a></li>
						<li><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2 text-muted"></i>Twitter</a></li>
						<li><a href="https://github.com/themefisher/"><i class="ti-github mr-2 text-muted"></i>Github</a></li>
						<li><a href="https://dribbble.com/themefisher/"><i class="ti-dribbble mr-2 text-muted"></i>Dribble</a></li>
					</ul>
					
				</div>
			</div>
		</div>
		
		<div class="footer-btm pt-4 pb-3">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="copyright">
						<p>&copy; Copyright Reserved to Sulfur by <a href="https://themefisher.com/" target="_blank" class=" text-white">Themefisher</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
   
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