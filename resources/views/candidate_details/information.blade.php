{{-- @extends('layouts.app') --}}

{{-- @section('Home') --}}
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thewebmax.org/jobzilla/employer-account-professional.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2023 07:31:42 GMT -->
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Jobzilla Template | Employer Profile</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather.css')}}"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.min.css')}}"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/lc_lightbox.css')}}"><!-- Lc light box popup -->     
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-select.min.css')}}"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.bootstrap5.min.css')}}"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/select.bootstrap5.min.css')}}"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->     
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/scrollbar.css')}}"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.css')}}"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.css')}}"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/swiper-bundle.min.css')}}"><!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"><!-- MAIN STYLE SHEET -->

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skins-type/skin-6.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">  
    
</head>
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer" style="margin-top:-340px;">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Register Peofessional</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li>Register Peofessional</li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- Employer Account START -->
    <div class="section-full p-t120  p-b90 site-bg-white bg-cover twm-ac-fresher-wrap" style="background-image:url(images/background/pattern.jpg)">
        <span class="twm-section-bg-img">
            <img src="{{asset('assets/images/reg-bg2.png')}}" alt="">
        </span>

        <div class="container">
            <div class="row d-flex justify-content-center">
                
                <div class="col-lg-8 col-md-12">
                    <div class="twm-right-section-panel-wrap2"style="margin-top:-340px;">
                        <!--Filter Short By-->
                        <div class="twm-right-section-panel site-bg-primary">
                            
                            <!--Basic Information-->
                            <div class="panel panel-default">
                                <div class="panel-heading wt-panel-heading p-a20">
                                    <h4 class="panel-tittle m-a0">Register Peofessional</h4>
                                </div>
                                <div class="panel-body wt-panel-body p-a20 ">

                                    

                                    <div class="twm-tabs-style-1">
                                        <ul class="nav nav-tabs" id="myTab3" role="tablist">

                                            <li class="nav-item">
                                                <button class="nav-link active" id="first" data-bs-toggle="tab" data-bs-target="#Personal" type="button" role="tab" >Personal</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" id="second" data-bs-toggle="ta" data-bs-target="#Employment" type="button" role="tab">Employment</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" id="three" data-bs-toggle="ta" data-bs-target="#Education" type="button" role="tab">Education</button>
                                            </li>
                                            
                                        </ul>
                                        <form action="" method="post">
                                            @csrf
                                        <div class="tab-content" id="myTab3Content">
                                            <div class="tab-pane fade show active" id="Personal">
                                            
                                                <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Your Name</label>
                                                                <div class="ls-inputicon-box"> 
                                                                    <input class="form-control" name="name" type="text" placeholder="Devid Smith" value="{{session('name')}}"required>
                                                                    <i class="fs-input-icon fa fa-user "></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            @error('name')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Email Address</label>
                                                                <div class="ls-inputicon-box"> 
                                                                    <input class="form-control" name="email" type="email" value=" {{session('email')}}" required>
                                                                    <i class="fs-input-icon fas fa-at"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            @error('email')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        {{-- <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Create Password</label>
                                                                <div class="ls-inputicon-box"> 
                                                                    <input class="form-control" name="company_Email" type="email" placeholder="Create Password">
                                                                    <i class="fs-input-icon fas fa-asterisk"></i>
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <div class="ls-inputicon-box"> 
                                                                    <input class="form-control" name="phone" type="text" placeholder="(251) 1234-456-7890" required>
                                                                    <i class="fs-input-icon fa fa-phone-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            @error('phone')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Current City</label>
                                                                <div class="ls-inputicon-box"> 
                                                                    <input class="form-control" name="city" type="text" placeholder="Tell us about your current city" required>
                                                                    <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>
                                                            @error('city')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        {{-- <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Upload Resume</label>
                                                                <form action="" class="dropzone"></form>
                                                                <small>If you do not have a resume document, you may write your brief professional profile <a class="site-text-primary" href="javascript:void(0);">here</a></small>
                                                            </div>                                    
                                                        </div> --}}

                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="form-group">
                                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked required>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    I agree to the Terms and Conditions and Privacy Policy.
                                                                </label>
                                                            </div>
                                                        </div>
                                                                        
                                                        <div class="col-xl-12 col-lg-12 col-md-12">                                  
                                                            <div class="text-left">
                                                                <button type="submit"  class="site-button ">Register Now</button>
                                                            </div>
                                                        </div>                                         
                                                    
                                                </div>
                                                
                                            </div>
                                        </form>

                                            
                                        </div>
                                    </div>  

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>   
     <!-- Employer Account START END -->
  <script>
    function first() {
        let first = document.getElementById("first");
        let second = document.getElementById("second");
        let Personal = document.getElementById("Personal")
        let Employment = document.getElementById("Employment");
        // console.log(second);
        second.className += " active";
        first.classList.remove("active");
        Personal.classList.remove("active");
        Personal.classList.remove("show");
        Employment.className += " active";
        Employment.className += " show";
        // console.log(Employment);
        // console.log(first);
        // console.log(second);
    }
    function second(){
        let second = document.getElementById("second");
        let three = document.getElementById("three");
        let Employment = document.getElementById("Employment");
        let Education = document.getElementById("Education");
        // console.log(three);
        Employment.classList.remove("active");
        Employment.classList.remove("show");
        Education.className += " active";
        Education.className += " show";
        three.className += " active";
        second.classList.remove("active");
        // first.className -= " active";
        // console.log(three);
    }
  </script>
    

</div>
<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script  src="{{asset('assets/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script  src="{{asset('assets/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{asset('assets/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{asset('assets/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script  src="{{asset('assets/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{asset('assets/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script  src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script  src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script  src="{{asset('assets/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script  src="{{asset('assets/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{asset('assets/js/lc_lightbox.lite.js')}}" ></script><!-- IMAGE POPUP -->
<script  src="{{asset('assets/js/bootstrap-select.min.js')}}"></script><!-- Form js -->
<script  src="{{asset('assets/js/dropzone.js')}}"></script><!-- IMAGE UPLOAD  -->
<script  src="{{asset('assets/js/jquery.scrollbar.js')}}"></script><!-- scroller -->
<script  src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script><!-- scroller -->
<script  src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script><!-- Datatable -->
<script  src="{{asset('assets/js/dataTables.bootstrap5.min.js')}}"></script><!-- Datatable -->
<script  src="{{asset('assets/js/chart.js')}}"></script><!-- Chart -->
<script  src="{{asset('assets/js/bootstrap-slider.min.js')}}"></script><!-- Price range slider -->
<script  src="{{asset('assets/js/swiper-bundle.min.js')}}"></script><!-- Swiper JS -->
<script  src="{{asset('assets/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{asset('assets/js/switcher.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
</body>
</html>
{{-- @endsection --}}