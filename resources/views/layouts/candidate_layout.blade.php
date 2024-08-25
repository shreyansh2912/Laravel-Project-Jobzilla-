<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from thewebmax.org/jobzilla/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2023 07:33:09 GMT -->
<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />
    
    <!-- PAGE TITLE HERE -->
    <title>jobzilla Template | dashboard</title>
    
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
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('assets/css/skins-type/skin-6.css')}}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/switcher.css')}}">   
        

 
</head>

<body>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->    

	<div class="page-wraper">
    
        <header id="header-admin-wrap" class="header-admin-fixed">
        
            <!-- Header Start -->
            <div id="header-admin">
                <div class="container">
                    
                    <!-- Left Side Content -->
                    <div class="header-left">
                        <div class="nav-btn-wrap">
                            <a class="nav-btn-admin" id="sidebarCollapse">
                                <span class="fa fa-angle-left"></span>
                            </a>                           
                        </div>
                    </div>
                    <!-- Left Side Content End -->
                    
                    <!-- Right Side Content -->
                    <div class="header-right">
                        <ul class="header-widget-wrap">
                            <!--Message-->
                            <li class="header-widget dashboard-message-dropdown">

                                <div class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle jobzilla-admin-messange" id="ID-MSG_dropdown" data-bs-toggle="dropdown">
                                        <i class="far fa-envelope"></i>
                                        <span class="notification-animate">4</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="ID-MSG_dropdown">
                                        <div class="message-list dashboard-widget-scroll">
                                            <ul>
                                                <li class="clearfix">
                                                    <span class="msg-avtar">
                                                        <img src="images/user-avtar/pic1.jpg" alt="">
                                                    </span>
                                        
                                                    <div class="msg-texting">
                                                        <strong>Alexa Johnson</strong> 
                                                        <small class="msg-time">
                                                            <span class="far fa-clock p-r-5"></span>12 mins ago
                                                        </small>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <span class="msg-avtar">
                                                        <img src="images/user-avtar/pic2.jpg" alt="">
                                                    </span>
                                        
                                                    <div class="msg-texting">
                                                        <strong>Johan Smith</strong> 
                                                        <small class="msg-time">
                                                            <span class="far fa-clock p-r-5"></span>2 hours ago
                                                        </small>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <span class="msg-avtar">
                                                        <img src="images/user-avtar/pic3.jpg" alt="">
                                                    </span>
                                        
                                                    <div class="msg-texting">
                                                        <strong>Bobby Brown</strong> 
                                                        <small class="msg-time">
                                                            <span class="far fa-clock p-r-5"></span>3 hours ago
                                                        </small>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <span class="msg-avtar">
                                                        <img src="images/user-avtar/pic4.jpg" alt="">
                                                    </span>
                                        
                                                    <div class="msg-texting">
                                                        <strong>David Deo</strong> 
                                                        <small class="msg-time">
                                                            <span class="far fa-clock p-r-5"></span>4 hours ago
                                                        </small>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </li>                                                                              
                                            </ul>
                                            <div class="message-view-all">
                                                <a href="javascript:;">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>

                            <!--Notification-->
                            <li class="header-widget dashboard-noti-dropdown">

                                <div class="dropdown">
                                    <a  href="javascript:;" class="dropdown-toggle jobzilla-admin-notification" id="ID-NOTI_dropdown" data-bs-toggle="dropdown">
                                        <i class="far fa-bell"></i>
                                        <span class="notification-animate">8</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="ID-NOTI_dropdown">
                                        <div class="dashboard-widgets-header">You have 7 notifications</div>
                                        <div class="noti-list dashboard-widget-scroll">
                                            <ul>
                                                    
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">Devid applied for <b>Webdesigner.</b> </span> 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">Nikol sent you a message. </span> 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">lucy bookmarked your <b>SEO Expert</b> Job! </span> 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">Your job for <b>teacher</b> has been approved! </span> 
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">Thor applied for <b>Team Leader</b>. </span> 
                                                    </a>
                                                </li>
                                                                                                                                                                                                                                                                
                                            </ul>

                                            <div class="noti-view-all">
                                                    <a href="javascript:;">View All</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>



                            </li>

                            <!--Account-->
                            <li class="header-widget">
								<div class="dashboard-user-section">
                                	<div class="listing-user">
                                        <div class="dropdown">
                                            <a href="javascript:;" class="dropdown-toggle" id="ID-ACCOUNT_dropdown" data-bs-toggle="dropdown">
                                                <div class="user-name text-black">
                                                    <span>
                                                        <img src="{{asset('assets/images/user-avtar/pic4.jpg')}}" alt="">
                                                    </span>Nikola Tesla
                                                </div> 
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="ID-ACCOUNT_dropdown">
                                                  
                                                <ul>
                                                    <li><a href="dashboard.html"><i class="fa fa-home"></i>Dashboard</a></li>
                                                    <li><a href="dash-messages.html"><i class="fa fa-envelope"></i> Messages</a></li>
                                                    <li><a href="dash-my-profile.html"><i class="fa fa-user"></i> Profile</a></li>
                                                    <li><a href="index.html"><i class="fa fa-share-square"></i> Logout</a></li>
                                                </ul>
                                                    
                                                
                                            </div>
                                        </div>

                                    </div>                                
                               </div>
                            </li>

                        </ul>
                    </div>
                    <!-- Right Side Content End -->
        
                </div>
            </div>
            <!-- Header End -->
        
        </header>            
    	
        <!-- Sidebar Holder -->
        <nav id="sidebar-admin-wraper">
            <div class="page-logo">
                <a href="/"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
            </div>
            
            <div class="admin-nav scrollbar-macosx">
                <ul>
                    <li class="">
                        <a href="{{url('employee/dashboard')}}"><i class="fa fa-home"></i><span class="admin-nav-text">Dashboard</span></a>
                    </li>

                    <li class="">
                        <a href="{{url('employee/company_profile')}}"><i class="fa fa-user-tie"></i><span class="admin-nav-text">Company Profile</span></a>
                    </li>

                    <li>
                    	<a href="javascript:;"><i class="fa fa-suitcase"></i><span class="admin-nav-text">Jobs</span></a>
                        <ul class="sub-menu">
                        	<li> <a href="{{url('employee/Add-jobs')}}"><span class="admin-nav-text">Post a New Jobs</span></a></li>
                        	<li> <a href="#"><span class="admin-nav-text">Manage Jobs</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('employee/candidate-list')}}"><i class="fa fa-user-friends"></i><span class="admin-nav-text">Candidates</span></a>
                    </li>
                    <li>
                        <a href="{{url('employee/fav_resumes')}}"><i class="fa fa-bookmark"></i><span class="admin-nav-text">Bookmark Resumes</span></a>
                    </li>

                    <li>
                        <a href="dash-package.html"><i class="fa fa-money-bill-alt"></i><span class="admin-nav-text">Packages</span></a>
                    </li>
                      
                    <li>
                    	<a href="javascript:;"><i class="fa fa-envelope"></i><span class="admin-nav-text">Messages <sup class="twm-msg-noti">5</sup></span></a>
                        <ul class="sub-menu">
                        	<li> <a href="{{url('employee/messages')}}"><span class="admin-nav-text">MSG Style-1</span></a></li>
                        	<li> <a href="#"><span class="admin-nav-text">MSG Style-2</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{url('employee/resume_alert')}}"><i class="fa fa-bell"></i><span class="admin-nav-text">Resume Alerts</span></a>
                    </li>  
                    
                    <li>
                        <a href="{{url('employee/my_profile')}}"><i class="fa fa-user"></i><span class="admin-nav-text">My Profile</span></a>
                    </li>

                    <li>
                        <a href="{{url('employee/change_password')}}"><i class="fa fa-fingerprint"></i><span class="admin-nav-text">Change Password</span></a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#delete-dash-profile"><i class="fa fa-trash-alt"></i><span class="admin-nav-text">Delete Profile</span></a>
                    </li>  
                                       
                    <li>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#logout-dash-profile"><i class="fa fa-share-square"></i><span class="admin-nav-text">Logout</span></a>
                    </li>                    
                    
                </ul>
            </div>   
        </nav>
        <!-- Page Content Holder -->
        <div id="content">
            <div class="content-admin-main">
                @yield('candidate')

            </div>

    	</div>

        <!--Delete Profile Popup-->
        <div class="modal fade twm-model-popup" id="delete-dash-profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Do you want to delete your profile?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="site-button" data-bs-dismiss="modal">No</button>
                    <button type="button" class="site-button outline-primary">Yes</button>
                </div>
            </div>
            </div>
        </div>


        <!--Logout Profile Popup-->
        <div class="modal fade twm-model-popup" id="logout-dash-profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Do you want to Logout your profile?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="site-button" data-bs-dismiss="modal">No</button>
                    <a href="/logout">
                        <button type="button" class="site-button outline-primary">Yes</button>
                    </a>
                </div>
            </div>
            </div>
        </div>
          

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

<!-- STYLE SWITCHER  ======= --> 
<div class="styleswitcher">

    <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div>
    
    <div class="styleswitcher-inner">
    
        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="{{asset('assets/css/skin-type/skin-1')}}"></a></li>
            <li><a class="theme-skin skin-2" href="dashboard61e7.html?theme=css/skin/skin-2"></a></li>
            <li><a class="theme-skin skin-3" href="dashboardcce5.html?theme=css/skin/skin-3"></a></li>
            <li><a class="theme-skin skin-4" href="dashboard13f7.html?theme=css/skin/skin-4"></a></li>
            <li><a class="theme-skin skin-5" href="dashboard19a6.html?theme=css/skin/skin-5"></a></li>
            <li><a class="theme-skin skin-6" href="dashboardfe5c.html?theme=css/skin/skin-6"></a></li>
            <li><a class="theme-skin skin-7" href="dashboardab47.html?theme=css/skin/skin-7"></a></li>
            <li><a class="theme-skin skin-8" href="dashboard5f8d.html?theme=css/skin/skin-8"></a></li>
            <li><a class="theme-skin skin-9" href="dashboard5663.html?theme=css/skin/skin-9"></a></li>
            <li><a class="theme-skin skin-10" href="dashboard28ac.html?theme=css/skin/skin-10"></a></li>
            
        </ul>           
        
    </div>    
</div>
<!-- STYLE SWITCHER END ==== -->




</script>

</body>


<!-- Mirrored from thewebmax.org/jobzilla/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2023 07:33:11 GMT -->
</html>

