@extends('layouts.candidate_layout')

@section('candidate')
<div id="content">

    <div class="content-admin-main " style="margin-left:-250px; margin-top:-20px;">
        <div class="wt-admin-dashboard-msg-2">
            <!--Left Msg section-->
            <div class="wt-dashboard-msg-user-list">
                   <div class="user-msg-list-btn-outer">
                    <button class="user-msg-list-btn-close">Close</button>
                    <button class="user-msg-list-btn-open">User Message</button>
                </div>                        
                <!-- Search Section Start-->
                <div class="wt-dashboard-msg-search">
                    <div class="input-group">
                        <input class="form-control" placeholder="Search Messages" type="text">
                        <button class="btn" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- Search Section End-->
                
                <!-- Search Section End-->
                <div class="msg-find-list">
                    <select class="wt-select-box bs-select-hidden">
                        <option>Recent Chats</option>
                        <option>Short by Time</option>
                        <option>Short by Unread</option>
                    </select>
                </div>                        
                <!-- Search Section End-->
                
                <!-- user msg list start-->
                <div id="msg-list-wrap" class="wt-dashboard-msg-search-list scrollbar-macosx"style="height:400px;">
                
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">2 hours ago</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                            <div class="msg-user-info-text">        
                                <div class="msg-user-name">Rustin Duza</div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">4 hours ago</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic2.jpg" alt=""></div>
                            <div class="msg-user-info-text">
                                <div class="msg-user-name">Peter Hawkins</div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">Fri</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic3.jpg" alt=""></div>
                            <div class="msg-user-info-text">
                                <div class="msg-user-name">Ralph Johnson</div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">Thu</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                            <div class="msg-user-info-text">
                                <div class="msg-user-name">Randall Henderson</div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">16/07/2019</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                            <div class="msg-user-info-text">
                                <div class="msg-user-name">Randall Warren</div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">16/07/2019</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic2.jpg" alt=""></div>
                            <div class="msg-user-info-text">
                                <div class="msg-user-name">Christina Fischer </div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">16/07/2019</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic3.jpg" alt=""></div>
                            <div class="msg-user-info-text">
                                <div class="msg-user-name">Wanda Willis</div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">16/07/2019</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                            <div class="msg-user-info-text">
                                <div class="msg-user-name">Peter Hawkins</div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">16/07/2019</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                            <div class="msg-user-info-text">
                                <div class="msg-user-name">Kathleen Moreno</div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="wt-dashboard-msg-search-list-wrap">
                        <a href="javascript:;" class="msg-user-info clearfix">
                            <div class="msg-user-timing">16/07/2019</div>
                            <div class="msg-user-info-pic"><img src="images/user-avtar/pic2.jpg" alt=""></div>
                            <div class="msg-user-info-text">
                                <div class="msg-user-name">Wanda Montgomery </div>
                                <div class="msg-user-discription">All created by our Global</div>
                            </div>
                        </a>
                    </div>
                    
                    
                                                                            
                </div>
                <!-- user msg list End-->
                
            </div>
            
            <!--Right Msg section-->
            <div class="wt-dashboard-msg-box" style=" background-color: #D4E6FF;">
                <div class="single-msg-user-name-box">
                    <div class="single-msg-short-discription">
                        <div class="msg-user-info-pic" style="width: 60px; height:60px;"><img src="{{asset('assets/images/user-avtar/pic4.jpg')}}" alt=""></div>
                        <h4 class="single-msg-user-name">Rustin Duza</h4>
                        Independent Web Designers and Developers.
                    </div>
                    <a href="#" class="message-action"><i class="far fa-trash-alt"></i> Delete Conversation</a>
                </div>
                <div id="msg-chat-wrap" class="single-user-msg-conversation scrollbar-macosx">
                    <div class="single-user-comment-wrap">
                        <div class="row">
                            <div class="col-xl-9 col-lg-12">
                                <div class="single-user-comment-block clearfix">
                                    {{-- <div class="single-user-com-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div> --}}
                                    <div class="single-user-com-text">Breaking the endless cycle of meaningless text message conversations starts with only talking to someone who offers interesting topics opinions.</div>
                                    <div class="single-user-msg-time">12:13 PM</div>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="single-user-comment-wrap sigle-user-reply">
                        <div class="row justify-content-end">
                            <div class="col-xl-9 col-lg-12">
                                <div class="single-user-comment-block clearfix">
                                    <div class="single-user-com-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                    <div class="single-user-com-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</div>
                                    <div class="single-user-msg-time">12:37 PM</div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="single-user-comment-wrap">
                        <div class="row">
                            <div class="col-xl-9 col-lg-12">
                                <div class="single-user-comment-block clearfix">
                                    <div class="single-user-com-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                                    <div class="single-user-com-text">Breaking the endless cycle of meaningless text message conversations starts with only talking to someone who offers interesting topics opinions.</div>
                                    <div class="single-user-msg-time">12:13 PM</div>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="single-user-comment-wrap sigle-user-reply">
                        <div class="row justify-content-end">
                            <div class="col-xl-9 col-lg-12">
                                <div class="single-user-comment-block clearfix">
                                    <div class="single-user-com-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                    <div class="single-user-com-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</div>
                                    <div class="single-user-msg-time">12:37 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="single-user-comment-wrap">
                        <div class="row">
                            <div class="col-xl-9 col-lg-12">
                                <div class="single-user-comment-block clearfix">
                                    <div class="single-user-com-pic"><img src="images/user-avtar/pic4.jpg" alt=""></div>
                                    <div class="single-user-com-text">Breaking the endless cycle of meaningless text message conversations starts with only talking to someone who offers interesting topics opinions.</div>
                                    <div class="single-user-msg-time">12:13 PM</div>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="single-user-comment-wrap sigle-user-reply">
                        <div class="row justify-content-end">
                            <div class="col-xl-9 col-lg-12">
                                <div class="single-user-comment-block clearfix">
                                    <div class="single-user-com-pic"><img src="images/user-avtar/pic1.jpg" alt=""></div>
                                    <div class="single-user-com-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</div>
                                    <div class="single-user-msg-time">12:37 PM</div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="single-msg-reply-comment" style="margin-top:40px;">
                    <div class="input-group">
                        <textarea class="form-control" placeholder="Type a message here"></textarea>
                        <button class="btn" type="button"><i class="fa fa-paper-plane"></i></button>
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
<div class="modal fade twm-model-popup" id="logout-dash-profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
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