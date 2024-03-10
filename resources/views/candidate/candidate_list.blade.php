@extends('layouts.candidate_layout')
@section('candidate')
<div class="wt-admin-right-page-header clearfix">
    <h2>Candidates</h2>
    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Candidates</span></div>
</div>

<div class="twm-pro-view-chart-wrap">

    <div class="col-lg-12 col-md-12 mb-4">
        <div class="panel panel-default site-bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0"><i class="far fa-list-alt"></i>All Candidates</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="twm-D_table p-a20 table-responsive">
                    <table id="candidate_data_table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th><input type="checkbox" onclick="checkAll(this)"></th>
                                <th>Name</th>
                                <th>Applied for</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--1-->
                            <tr>
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Wanda Montgomery </h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>UI Designer</td>
                                <td>15/06/2023 at 10:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">Approved</span></div></td>
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
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic2.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Peter Hawkins</h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>Medical Professed</td>
                                <td>16/06/2023 at 11:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-golden">Pending</span></div></td>
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
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic3.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Ralph Johnson</h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>Bank Manager</td>
                                <td>17/06/2023 at 01:15 pm</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-red">Rejects</span></div></td>
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
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic4.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Randall Henderson</h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>IT Contractor</td>
                                <td>18/06/2023 at 10:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-golden">Pending</span></div></td>
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
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic5.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Randall Warren</h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>Digital & Creative</td>
                                <td>22/06/2023 at 10:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">Approved</span></div></td>
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
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic6.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Wanda Montgomery </h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>UI Designer</td>
                                <td>15/06/2023 at 10:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">Approved</span></div></td>
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
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic7.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Wanda Montgomery </h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>UI Designer</td>
                                <td>15/06/2023 at 10:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">Approved</span></div></td>
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

                            <!--8-->
                            <tr>
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic8.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Wanda Montgomery </h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>UI Designer</td>
                                <td>15/06/2023 at 10:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">Approved</span></div></td>
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

                            <!--9-->
                            <tr>
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Wanda Montgomery </h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>UI Designer</td>
                                <td>15/06/2023 at 10:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">Approved</span></div></td>
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

                            <!--10-->
                            <tr>
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic2.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Peter Hawkins</h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>Medical Professed</td>
                                <td>16/06/2023 at 11:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-golden">Pending</span></div></td>
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

                            <!--11-->
                            <tr>
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic3.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Ralph Johnson</h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>Bank Manager</td>
                                <td>17/06/2023 at 01:15 pm</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-red">Rejects</span></div></td>
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

                            <!--12-->
                            <tr>
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic4.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Randall Henderson</h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>IT Contractor</td>
                                <td>18/06/2023 at 10:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-golden">Pending</span></div></td>
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

                            <!--13-->
                            <tr>
                                <td><input type="checkbox" ></td>
                                <td>
                                    <div class="twm-DT-candidates-list">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic5.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>Randall Warren</h4>
                                                <p class="twm-candidate-address">
                                                    <i class="feather-map-pin"></i>New York
                                                </p>
                                            </a>
                                            
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>Digital & Creative</td>
                                <td>22/06/2023 at 10:35 am</td>
                                <td><div class="twm-jobs-category"><span class="twm-bg-green">Approved</span></div></td>
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
                                <th></th>
                                <th>Name</th>
                                <th>Applied for</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection