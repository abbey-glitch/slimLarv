@include("includes.head")
<style>
	label[for="upload_profile_photo"], #close-profile-photo-preview{
		display: none;
	}
</style>

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


                <form id="create-account-form" claas="create-account-form" method="POST"  action="{{ route('register') }}" enctype="multipart/form-data">
        			@csrf
                <!-- end message -->
                <h3 class="text-md ">Create Account</h3>
                <p class="mb-5">Create new account</p>

                 <div class="form-group">
                	<label>First name</label>
                	<input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname"  value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="Enter your First name" required>

                	@error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>

                 <div class="form-group">
                	<label>Last name</label>
                	<input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname"  value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Enter your Last name" required>

                	@error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>

                 <div class="form-group">
                	<label>Email address</label>
                	<input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email adress" required>

                	@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>

                <div class="form-group">
                	<label>Username</label>
                	<input type="text" class="form-control @error('username') is-invalid @enderror" name="username"  value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Enter your username" required>
                	@error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>

                <div class="form-group">
                	<label>Password</label>
                	<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" autofocus placeholder="Enter your password" required>

                	@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>

                 <div class="form-group">
                	<label>Confirm Password</label>
                	<input type="password" class="form-control @error('password_confirm') is-invalid @enderror" name="password_confirmation" required autocomplete="password_confirm" autofocus placeholder="Enter your password again" required>
                </div>

                 <div class="form-group bg-dark p-3">
                 	<h6 class="text-white">Upload a profile photo <span  id="close-profile-photo-preview" style="float: right;"><a href="" class="text-white">X</a></span></h6>
                 	<div id="profile_photo_preview" class="mb-2"></div>
                	<label for="upload_profile_photo">Upload a profile picture</label>
                	<input type="file" name="profile_photo" id="profile_photo">
                </div>

                <div class="form-group mt-3">
                	<button class="btn btn-md btn-main">Create Account</button>
                </div>

               
               <hr>
               <h6>Already Registered? <a href="{{ route('login') }}"><u>Sign in</u></a></h6>
            </form>
            </div>  
        </div>
    </div>
</section>

<!-- footer Start -->
	@include("includes.footer")
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
  	@include("includes.footer-scripts")

  	<script type="text/javascript">
  			
  		//handles whem the profile photo is uploaded 
  		const profile_photo_preview = document.querySelector("#profile_photo_preview");
  		const close_profile_photo_preview = document.querySelector("#close-profile-photo-preview");
  		const profile_photo_field = document.querySelector("#profile_photo");

  		profile_photo_field.addEventListener("change", function(event){

  			const file = this.files.item(0);

  			const fileReader = new FileReader();
  			fileReader.readAsDataURL(file);

  			fileReader.onload = function(){

  				const encoded_img = this.result;

  				//show a preview of the photo
  				profile_photo_preview.innerHTML = `<img src='${encoded_img}' width=300 height=300>`;

  				close_profile_photo_preview.style.display = "block";
  			}


  			close_profile_photo_preview.onclick = function(event){
  				event.preventDefault();

  				profile_photo_preview.innerHTML = "";
  				//clear the input field for the profile photo upload also
  				
  				profile_photo_field.value = null

  				//set this back to hiddem
  				this.style.display = "none";

  			}






  		});


  	</script>


  </body>
  
</html>