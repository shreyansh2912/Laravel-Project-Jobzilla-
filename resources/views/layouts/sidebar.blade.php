
@extends('layouts.app')


@section('Home')
            <!-- OUR BLOG START -->
            <div class="section-full p-t120  p-b90 site-bg-white">
                

                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                            <div class="side-bar-st-1">
                                
                                <div class="twm-candidate-profile-pic">
                                    
                                    <img src="images/user-avtar/pic4.jpg" alt="" height="100px" width="100px">
                                    <div class="upload-btn-wrapper">
                                        
                                        <div id="upload-image-grid"></div>
                                        <button class="site-button button-sm">Upload Photo</button>
                                        <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
                                    </div>
                                    
                                </div>
                                <div class="twm-mid-content text-center">
                                    <a href="candidate-detail.html" class="twm-job-title">
                                        <h4></h4>
                                    </a>
                                    <p>IT Contractor</p>
                                </div>
                               
                                <div class="twm-nav-list-1">
                                    <ul>
                                        <li><a href="candidate-dashboard.html"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                        <li class="active"><a href="candidate-profile.html"><i class="fa fa-user"></i> My Pfofile</a></li>
                                        <li><a href="candidate-jobs-applied.html"><i class="fa fa-suitcase"></i> Applied Jobs</a></li>
                                        <li><a href="candidate-my-resume.html"><i class="fa fa-receipt"></i> My Resume</a></li>
                                        <li><a href="candidate-saved-jobs.html"><i class="fa fa-file-download"></i> Saved Jobs</a></li>
                                        <li><a href="candidate-cv-manager.html"><i class="fa fa-paperclip"></i> CV Manager</a></li>
                                        <li><a href="candidate-job-alert.html"><i class="fa fa-bell"></i> Job Alerts</a></li>
                                        <li><a href="candidate-change-password.html"><i class="fa fa-fingerprint"></i> Change Passeord</a></li>
                                        <li><a href="candidate-chat.html"><i class="fa fa-comments"></i>Chat</a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
@yield('candidatePage')
@endsection