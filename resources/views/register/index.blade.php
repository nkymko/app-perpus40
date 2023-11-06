



<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Register | SI Perpustakaan 40</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="template/assets/images/favicon.ico" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="template/assets/css/core/libs.min.css" />
      
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="template/assets/css/hope-ui.min.css?v=2.0.0" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="template/assets/css/custom.min.css?v=2.0.0" />
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="template/assets/css/dark.min.css"/>
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="template/assets/css/customizer.min.css" />
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="template/assets/css/rtl.min.css"/>
      
      
  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">            
               <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="template/assets/images/auth/05.png" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
            <div class="col-md-6">               
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                        <div class="card-body">
                            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center justify-content-center mb-5">
                                <!--Logo start-->
                                <!--logo End-->
                                
                                <!--Logo start-->
                                <div class="logo-main">
                                    <div class="logo-normal">
                                      <img src="{{ asset('img/SMKN40.png') }}" class="icon-30" alt="">
                                    </div>
                                    <div class="logo-mini">
                                      <img src="{{ asset('img/SMKN40.png') }}" class="icon-30" alt="">
                                    </div>
                                </div>
                                <!--logo End-->
                                
                                <h4 class="logo-title ms-3">SI Perpustakaan 40</h4>
                             </a>
                           <h2 class="mb-2 text-center">Sign Up</h2>
                           <p class="text-center">Create your Perpus 40 account.</p>
                           <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="full-name" class="form-label">Nama</label>
                                       <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}"  id="full-name" required>
                                    </div>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" required>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="phone" class="form-label">NIS/NIP</label>
                                       <input type="text" name="nomor_induk" class="form-control @error('nomor_induk') is-invalid @enderror" value="{{ old('nomor_induk') }}" id="phone" required>
                                    </div>
                                    @error('nomor_induk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="confirm-password" class="form-label">Confirm Password</label>
                                       <input type="password" name="password_confirmation" class="form-control" id="confirm-password" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" name="agreement" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">I agree with the terms of use</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign Up</button>
                              </div>
                              <p class="mt-3 text-center">
                                 Already have an Account <a href="{{ route('login') }}" class="text-underline">Sign In</a>
                              </p>
                           </form>
                        </div>
                     </div>    
                  </div>
               </div>           
               <div class="sign-bg sign-bg-right">
                  <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                        <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8"/>
                        <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 149.47 319.328)" fill="#3A57E8"/>
                        <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 203.936 99.543)" fill="#3A57E8"/>
                        <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857" transform="rotate(45 204.316 -229.172)" fill="#3A57E8"/>
                     </g>
                  </svg>
               </div>
            </div>   
         </div>
      </section>
      </div>
    
    <!-- Library Bundle Script -->
    <script src="template/assets/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="template/assets/js/core/external.min.js"></script>
    
    <!-- Widgetchart Script -->
    <script src="template/assets/js/charts/widgetcharts.js"></script>
    
    <!-- mapchart Script -->
    <script src="template/assets/js/charts/vectore-chart.js"></script>
    <script src="template/assets/js/charts/dashboard.js" ></script>
    
    <!-- fslightbox Script -->
    <script src="template/assets/js/plugins/fslightbox.js"></script>
    
    <!-- Settings Script -->
    <script src="template/assets/js/plugins/setting.js"></script>
    
    <!-- Slider-tab Script -->
    <script src="template/assets/js/plugins/slider-tabs.js"></script>
    
    <!-- Form Wizard Script -->
    <script src="template/assets/js/plugins/form-wizard.js"></script>
    
    <!-- AOS Animation Plugin-->
    
    <!-- App Script -->
    <script src="template/assets/js/hope-ui.js" defer></script>
    
  </body>
</html>