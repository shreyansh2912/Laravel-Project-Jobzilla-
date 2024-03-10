@extends('layouts.candidate_layout');
@section('candidate')
<div class="wt-admin-right-page-header clearfix">
    <h2>Bookmark</h2>
    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Bookmarked Jobs</span></div>
</div>

<div class="twm-pro-view-chart-wrap">

    <div class="col-lg-12 col-md-12 mb-4">
        <div class="panel panel-default site-bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0"><i class="far fa-bookmark"></i>Bookmarked Jobs</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="twm-D_table p-a20 table-responsive">
                    <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Types</th>
                                <th>Post Timing</th>
                                <th>Applied Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--1-->
                            <tr>
                                <td>
                                    <div class="twm-bookmark-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/jobs-company/pic1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Senior Web Designer</h4>
                                            </a>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA
                                            </p>
                                            <a href="#" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">New</span></div></td>
                                <td><div class="twm-job-post-duration">20 days ago</div></td>
                                <td>08/06/2023</td>
                                <td><span class="text-clr-green2">Active</span></td>
                                <td>
                                    <div class="twm-table-controls">
                                        <ul class="twm-DT-controls-icon list-unstyled">
                                            <li>
                                                <button title="View profile" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="fa fa-eye"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Send message" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-envelope-open"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!--2-->
                            <tr>
                                <td>
                                    <div class="twm-bookmark-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/jobs-company/pic2.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Sr. Rolling Stock Technician</h4>
                                            </a>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA
                                            </p>
                                            <a href="#" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-brown">Intership</span></div></td>
                                <td><div class="twm-job-post-duration">20 days ago</div></td>
                                <td>08/06/2023</td>
                                <td><span class="text-clr-green2">Active</span></td>
                                <td>
                                    <div class="twm-table-controls">
                                        <ul class="twm-DT-controls-icon list-unstyled">
                                            <li>
                                                <button title="View profile" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="fa fa-eye"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Send message" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-envelope-open"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!--3-->
                            <tr>
                                <td>
                                    <div class="twm-bookmark-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/jobs-company/pic3.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>IT Department Manager</h4>
                                            </a>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA
                                            </p>
                                            <a href="#" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-purple">Fulltime</span></div></td>
                                <td><div class="twm-job-post-duration">20 days ago</div></td>
                                <td>08/06/2023</td>
                                <td><span class="text-clr-green2">Active</span></td>
                                <td>
                                    <div class="twm-table-controls">
                                        <ul class="twm-DT-controls-icon list-unstyled">
                                            <li>
                                                <button title="View profile" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="fa fa-eye"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Send message" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-envelope-open"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!--4-->
                            <tr>
                                <td>
                                    <div class="twm-bookmark-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/jobs-company/pic4.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Art Production Specialist</h4>
                                            </a>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA
                                            </p>
                                            <a href="#" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-sky">Freelancer</span></div></td>
                                <td><div class="twm-job-post-duration">20 days ago</div></td>
                                <td>08/06/2023</td>
                                <td><span class="text-clr-green2">Active</span></td>
                                <td>
                                    <div class="twm-table-controls">
                                        <ul class="twm-DT-controls-icon list-unstyled">
                                            <li>
                                                <button title="View profile" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="fa fa-eye"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Send message" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-envelope-open"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!--5-->
                            <tr>
                                <td>
                                    <div class="twm-bookmark-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/jobs-company/pic5.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Recreation & Fitness Worker</h4>
                                            </a>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA
                                            </p>
                                            <a href="#" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-golden">Temporary</span></div></td>
                                <td><div class="twm-job-post-duration">20 days ago</div></td>
                                <td>08/06/2023</td>
                                <td><span class="text-clr-green2">Active</span></td>
                                <td>
                                    <div class="twm-table-controls">
                                        <ul class="twm-DT-controls-icon list-unstyled">
                                            <li>
                                                <button title="View profile" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="fa fa-eye"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Send message" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-envelope-open"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!--6-->
                            <tr>
                                <td>
                                    <div class="twm-bookmark-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/jobs-company/pic1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Senior Web Designer</h4>
                                            </a>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA
                                            </p>
                                            <a href="#" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">New</span></div></td>
                                <td><div class="twm-job-post-duration">20 days ago</div></td>
                                <td>08/06/2023</td>
                                <td><span class="text-clr-green2">Active</span></td>
                                <td>
                                    <div class="twm-table-controls">
                                        <ul class="twm-DT-controls-icon list-unstyled">
                                            <li>
                                                <button title="View profile" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="fa fa-eye"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Send message" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-envelope-open"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!--7-->
                            <tr>
                                <td>
                                    <div class="twm-bookmark-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/jobs-company/pic2.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Sr. Rolling Stock Technician</h4>
                                            </a>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA
                                            </p>
                                            <a href="#" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">New</span></div></td>
                                <td><div class="twm-job-post-duration">20 days ago</div></td>
                                <td>08/06/2023</td>
                                <td><span class="text-clr-green2">Active</span></td>
                                <td>
                                    <div class="twm-table-controls">
                                        <ul class="twm-DT-controls-icon list-unstyled">
                                            <li>
                                                <button title="View profile" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="fa fa-eye"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Send message" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-envelope-open"></span>
                                                </button>
                                            </li>
                                            <li>
                                                <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Types</th>
                                <th>Post Timing</th>
                                <th>Applied Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
                                      
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
    <button type="button" class="site-button outline-primary">Yes</button>
</div>
</div>
</div>
@endsection