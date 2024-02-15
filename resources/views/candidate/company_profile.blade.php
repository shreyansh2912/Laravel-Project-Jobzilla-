
@extends('layouts.candidate_layout')

@section('candidate')
<div class="wt-admin-right-page-header clearfix">
    <h2>Company Profile!</h2>
    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Company Profile!</span></div>
</div>

<!--Logo and Cover image-->
<div class="panel panel-default">
    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Logo and Cover image</h4>
    </div>
    <div class="panel-body wt-panel-body p-a20 p-b0 m-b30 ">
        
        <div class="row">
                
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    
                    <div class="dashboard-profile-pic">
                        <div class="dashboard-profile-photo">
                            <img src="{{asset('assets/images/jobs-company/pic1.jpg')}}" alt="">
                            <div class="upload-btn-wrapper">
                                <div id="upload-image-grid"></div>
                                <button class="site-button button-sm">Upload Photo</button>
                                <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <p><b>Company Logo :- </b> Max file size is 1MB, Minimum dimension: 136 x 136 And Suitable files are .jpg & .png</p>
                    </div>

                </div> 
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="dashboard-cover-pic">
                    <form action="https://thewebmax.org/jobzilla/upload.php" class="dropzone"></form>
                    <p><b>Background Banner Image :- </b> Max file size is 1MB, Minimum dimension: 770 x 310 And Suitable files are .jpg & .png</p> 
                </div>                                    
            </div>

        </div>
                    
    </div>
</div> 

<!--Basic Information-->
<div class="panel panel-default">
    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Basic Informations</h4>
    </div>
    <div class="panel-body wt-panel-body p-a20 m-b30 ">
        <form>
            <div class="row">
                                
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Company Name</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control" name="company_name" type="text" placeholder="Devid Smith">
                                <i class="fs-input-icon fa fa-user "></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control" name="company_phone" type="text" placeholder="(251) 1234-456-7890">
                                <i class="fs-input-icon fa fa-phone-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control" name="company_Email" type="email" placeholder="Devid@example.com">
                                <i class="fs-input-icon fa fa-envelope"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Website</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control" name="company_website" type="text" placeholder="https://.../">
                                <i class="fs-input-icon fa fa-globe-americas"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Est. Since</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control" name="company_since" type="text" placeholder="Since...">
                                <i class="fs-input-icon fa fa-globe-americas"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="form-group city-outer-bx has-feedback">
                            <label>Team Size</label>
                            <div class="ls-inputicon-box">  
                                <select class="wt-select-box selectpicker" name="team-size" data-live-search="true" title="team-size" id="city" data-bv-field="size">
                                    <option class="bs-title-option" value="">5-10</option>
                                    <option class="" value="">10+</option>
                                    <option class="" value="">20+</option>
                                    <option class="" value="">50+</option>
                                </select>
                                <i class="fs-input-icon fa fa-sort-numeric-up"></i>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Greetings! We are Galaxy Software Development Company."></textarea>
                        </div>
                    </div>
                   
                                                                                
                    <div class="col-lg-12 col-md-12">                                   
                        <div class="text-left">
                            <button type="submit" class="site-button">Save Changes</button>
                        </div>
                    </div> 
                                                        
                
            </div>
       </form>             
    </div>
</div>

<!--Photo gallery-->
<div class="panel panel-default">
    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Photo Gallery</h4>
    </div>
    <div class="panel-body wt-panel-body p-a20 m-b30 ">
        
        <div class="row">
                
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <form action="https://thewebmax.org/jobzilla/upload.php" class="dropzone"></form>
                </div>
            </div>
                                                                            
            <div class="col-lg-12 col-md-12">                                   
                <div class="text-left">
                    <button type="submit" class="site-button">Save Changes</button>
                </div>
            </div> 
                                                    
            
        </div>
                 
    </div>
</div>

<!--Video gallery-->
<div class="panel panel-default">

    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Video Gallery</h4>
    </div>

    <div class="panel-body wt-panel-body p-a20 m-b30 ">
        <div class="row">

            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label>Youtube</label>
                    <div class="ls-inputicon-box input_fields_youtube"> 
                        <input class="form-control wt-form-control" name="mytext[]" type="text" placeholder="https://www.youtube.com/">
                        <i class="fs-input-icon fab fa-youtube"></i>
                    </div>
                    <div class="text-right m-tb10">
                        <button class="add_field_youtube">Add More Fields <i class="fa fa-plus"></i></button>
                    </div>
                </div>                                    
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label>Vimeo</label>
                    <div class="ls-inputicon-box input_fields_vimeo"> 
                        <input class="form-control wt-form-control" name="mytext[]" type="text" placeholder="https://vimeo.com/">
                        <i class="fs-input-icon fab fa-vimeo-v"></i>
                    </div>
                    <div class="text-right m-tb10">
                        <button class="add_field_vimeo">Add More Fields <i class="fa fa-plus"></i></button>
                    </div>                                        
                </div> 
            </div>
            
            <div class="col-lg-12 col-md-12">
                <div class="custome-video-upload form-group">
                    <label>Custom Video</label>
                    <form action="https://thewebmax.org/jobzilla/upload.php" class="dropzone"></form>
                </div> 
            </div> 
            
            <div class="col-lg-12 col-md-12">                                   
                <div class="text-left">
                    <button type="submit" class="site-button">Save Changes</button>
                </div>
            </div> 

        </div>           
    </div> 
    
</div>

<!--Social Network-->
<div class="panel panel-default">
    <div class="panel-heading wt-panel-heading p-a20">
        <h4 class="panel-tittle m-a0">Social Network</h4>
    </div>
    <div class="panel-body wt-panel-body p-a20 m-b30 ">
        <form>
            <div class="row">
                   
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.facebook.com/">
                                <i class="fs-input-icon fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">    
                        <div class="form-group">
                            <label>Twitter</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://twitter.com/">
                                <i class="fs-input-icon fab fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">    
                        <div class="form-group">
                            <label>linkedin</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://in.linkedin.com/">
                                <i class="fs-input-icon fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">     
                        <div class="form-group">
                            <label>Whatsapp</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.whatsapp.com/">
                                <i class="fs-input-icon fab fa-whatsapp"></i>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="col-lg-4 col-md-6">                               
                        <div class="form-group">
                            <label>Instagram</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.instagram.com/">
                                <i class="fs-input-icon fab fa-instagram"></i>
                            </div>
                        </div>
                    </div>    
                        
                    <div class="col-lg-4 col-md-6">    
                        <div class="form-group">
                            <label>Pinterest</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://in.pinterest.com/">
                                <i class="fs-input-icon fab fa-pinterest-p"></i>
                            </div>
                        </div>                 
                    </div>
                    
                    <div class="col-lg-4 col-md-6">    
                        <div class="form-group">
                            <label>Tumblr</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.tumblr.com/">
                                <i class="fs-input-icon fab fa-tumblr"></i>
                            </div>
                        </div>                                                                                          
                    </div>
                    
                    <div class="col-lg-4 col-md-6">    
                        <div class="form-group">
                            <label>Youtube</label>
                            <div class="ls-inputicon-box"> 
                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.youtube.com/">
                                <i class="fs-input-icon fab fa-youtube"></i>
                            </div>
                        </div>                  
                    </div> 
                                                                                
                <div class="col-lg-12 col-md-12">                                   
                        <div class="text-left">
                            <button type="submit" class="site-button">Save Changes</button>
                        </div>
                    </div> 
                                                        
                
            </div>
       </form>             
    </div>
</div>

@endsection