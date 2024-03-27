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
    <style>
        .span{
            color: red;
        }
    </style>
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
        <div class="twm-section-bg-img">
            <img src="{{asset('assets/images/reg-bg2.png')}}" alt="">
        </div>

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

                                            <li class="nav-item ">
                                                <button class="nav-link " id="first" data-bs-toggle="ta" data-bs-target="#Personal" type="button" role="tab" >Personal</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link active" id="second" data-bs-toggle="tab" data-bs-target="#Employment" type="button" role="tab">Employment</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link " id="three" data-bs-toggle="ta" data-bs-target="#Education" type="button" role="tab">Education</button>
                                            </li>
                                            
                                        </ul>
                                        <form action="" method="post">
                                            @csrf
                                        <div class="tab-content" id="myTab3Content">
                                    
                                            <div class="tab-pane fade show active" id="Employment">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <label></label>
                                                            <div class="row twm-form-radio-inline" style="margin-bottom: 40px; margin-top:-50px; ">
                                                                
                                                                <div class="col-md-6">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Experianced
                                                                    </label>
                                                                </div>

                                                                <div  class="col-md-6"  >
                                                                        <a href="education" class="form-check-label" for="edu">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="edu" >
                                                                            Freasher
                                                                        </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Current Desination*</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="current_job" type="text" placeholder="Your Job Title" value="{{old('current_job')}}">
                                                                <i class="fs-input-icon fa fa-address-card "></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="span">
                                                        @error('current_job')
                                                            {{$message}}
                                                        @enderror
                                                    </span>

                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Current Company*</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="current_company" type="email" placeholder="Where you are currently working" value="{{old('current_company')}}">
                                                                <i class="fs-input-icon fas fa-building"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <span class="span" >
                                                        @error('current_company')
                                                            {{$message}}
                                                        @enderror
                                                     </span>
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div>
                                                            <label>Annual Salary</label>
                                                            <div class="row">

                                                                <div class="col-xl-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <div class="ls-inputicon-box">  
                                                                            <select class="wt-select-box selectpicker" name="salary" data-live-search="true" title="" id="s-Lakh" data-bv-field="size" >
                                                                                <option class="bs-title-option" value="{{old('salary')}}">Lakh</option>
                                                                                <option>0 to 5</option>
                                                                                <option>5 to 10</option>
                                                                                <option>10 to 15</option>
                                                                                <option>15 to 20</option>
                                                                                <option>20 Above</option>
                                                                            </select>
                                                                            <i class="fs-input-icon fa fa-dollar-sign"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {{-- <div class="col-xl-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <div class="ls-inputicon-box">  
                                                                            <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-Thousand" data-bv-field="size">
                                                                                <option class="bs-title-option" value="">Thousand</option>
                                                                                <option> 05 Thousand </option>
                                                                                <option> 10 Thousand </option>
                                                                                <option> 15 Thousand </option>
                                                                                <option> 20 Thousand </option>
                                                                                <option> 25 Thousand </option>
                                                                                <option> 30 Thousand </option>
                                                                                <option> 35 Thousand </option>
                                                                                <option> 40 Thousand </option>
                                                                                <option> 45 Thousand </option>
                                                                                <option> 50 Thousand </option>
                                                                                </select>
                                                                            <i class="fs-input-icon fa fa-dollar-sign"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                            </div>
                                                            <span class="span">
                                                                @error('salary')
                                                                    {{$message}}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>


                                                    <div class="col-xl-12 col-lg-12">
                                                        <div>
                                                            <label>Working Since</label>
                                                            <div class="row">

                                                                <div class="col-xl-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <div class="ls-inputicon-box">  
                                                                            <select class="wt-select-box selectpicker" name="experiance" data-live-search="true" title="" id="s-Year_1" data-bv-field="size">
                                                                                <option class="bs-title-option"  value="{{old('experiance')}}">Year</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="10">Above</option>
                                                                            </select>
                                                                            <i class="fs-input-icon fa fa-calendar"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="span">
                                                        @error('experiance')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Current Location</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="current_location" type="text" placeholder="Tell us about your current city" value="{{old('current_location')}}">
                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="span">
                                                        @error('current_location')
                                                            {{$message}}
                                                        @enderror
                                                    </span>

{{--                                                
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <label>Duration of Notice Period</label>
                                                            <div class="ls-inputicon-box">  
                                                                <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-Days_1" data-bv-field="size">
                                                                    <option class="bs-title-option" value="">Days</option>
                                                                    <option>05 Days</option>
                                                                    <option>10 Days</option>
                                                                    <option>15 Days</option>
                                                                    <option>30 Days</option>
                                                                    <option>2 Months</option>
                                                                    <option>3 Months</option>
                                                                </select>
                                                                <i class="fs-input-icon fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Skills</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control"name="skills" type="text" placeholder="Finance, Sales, Retail, Engineering" value="{{old('skills')}}">
                                                                <i class="fs-input-icon fas fa-asterisk"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="span">
                                                        @error('skills')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Industry</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="industry" type="text" placeholder="Your Industry" value="{{old('industry')}}">
                                                                <i class="fs-input-icon fa fa-industry"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="span">
                                                        @error('industry')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                    {{-- <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Functional Area</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="company_phone" type="text" placeholder="Your Department">
                                                                <i class="fs-input-icon fa fa-industry"></i>
                                                            </div>
                                                        </div>
                                                    </div> --}}

                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Role</label>
                                                            <div class="ls-inputicon-box input_fields_custom"> 
                                                                <input class="form-control" name="role" type="text" placeholder="Select the role that you work in" value="{{old('role')}}">
                                                                <i class="fs-input-icon fa fa-user"></i>
                                                            </div>
                                                            <div class="text-right m-tb10">
                                                                <button class="add_field_custom">Add More Fields <i class="fa fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="span">
                                                        @error('role')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                    <div class="col-xl-12 col-lg-12 col-md-12">                                  
                                                        <div class="text-left">
                                                            <button type="submit" class="site-button">Continue</button>
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
    function eduction() {
      
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