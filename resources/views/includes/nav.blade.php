<header class="navigation ">
  <!--   <div class="header-top d-none d-md-block d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="header-top-info">
                        <a href="tel:+23-345-67890"><i class="fa fa-phone mr-2"></i><span>+23-345-67890</span></a>
                        <a href="mailto:support@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
                        <a href="themefisher.html"><i class="fa fa-globe mr-2"></i>Themefisher.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header-top-socials text-center text-lg-right">
                        <a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
                        <a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
                        <a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <nav class="navbar navbar-expand-lg  main-nav py-3" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index-2.html">
            {{ config('app.name', 'Laravel') }}
          </a>

          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index-2.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
               <li class="nav-item"><a class="nav-link" href="project.html">Gallery</a></li>
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog +</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown05">
                        <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                        <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

                        <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                    </ul>
              </li>
               <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            <a href="{{ route('login') }}" class="quote-btn ml-4 bg-primary text-white rounded-btn letter-spacing text-uppercase" >Sign in <i class="ti-angle-right"></i></a>
          </div>
        </div>
    </nav>
</header>