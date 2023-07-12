@extends('common.main')
@push('title')
<title>Messages</title>
@endpush
@push('jsfile')
<script src="{{ asset('assets/js/messages.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/messages.css') }}">


<!------ Include the above in your HEAD tag ---------->




@endpush
@section('main-section')
<div class="container mt-5 pt-5">
    <!-- <h3 class="text-center">Messaging</h3> -->
    <div class="messaging">
        <div class="inbox_msg">
            <div class="inbox_people">
                <div class="headind_srch">
                    <div class="recent_heading">
                        <h4>Recent</h4>
                    </div>
                    <div class="srch_bar">
                        <div class="stylish-input-group">
                            <input type="text" class="search-bar" placeholder="Search">
                            <span class="input-group-addon">
                                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="inbox_chat">

                </div>
            </div>

            <div class="mesgs">
                <div class="msg_history">
                    <!-- <div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="received_msg">
                            <div class="received_withd_msg">
                                <p>Test which is a new approach to have all
                                    solutions</p>
                                <span class="time_date"> 11:01 AM | June 9</span>
                            </div>
                        </div>
                    </div>
                    <div class="outgoing_msg">
                        <div class="sent_msg">
                            <p>Test which is a new approach to have all
                                solutions</p>
                            <span class="time_date"> 11:01 AM | June 9</span>
                        </div>
                    </div>
                    <div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="received_msg">
                            <div class="received_withd_msg">
                                <p>Test, which is a new approach to have</p>
                                <span class="time_date"> 11:01 AM | Yesterday</span>
                            </div>
                        </div>
                    </div>
                    <div class="outgoing_msg">
                        <div class="sent_msg">
                            <p>Apollo University, Delhi, India Test</p>
                            <span class="time_date"> 11:01 AM | Today</span>
                        </div>
                    </div>
                    <div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="received_msg">
                            <div class="received_withd_msg">
                                <p>We work directly with our designers and suppliers,
                                    and sell direct to you, which means quality, exclusive
                                    products, at a price anyone can afford.</p>
                                <span class="time_date"> 11:01 AM | Today</span>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="type_msg">
                    <div class="input_msg_write" style=" border: 1px solid green;">
                        <input type="text" class="write_msg" id='msg_text' placeholder="Type a message" />
                        <button class="msg_send_btn btn btn-primary" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal " id="modal_edit_message" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="edit_msg">Update</label>
                    <input type="text" class="form-control" name="edit_msg" id="edit_msg" aria-describedby="helpId">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="submit_edit_msg">Update</button>
            </div>
        </div>
    </div>
</div>

@endsection