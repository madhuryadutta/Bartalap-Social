@extends('common.main')
@push('title')
<title>Profile</title>
@endpush
@push('jsfile')
<script src="{{ asset('assets/js/userprofile.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/profilestyle.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endpush
@section('main-section')

<div id="content" class="container pt-5 mt-5">
    <div class="profile-header">
        <div class="profile-header-cover">
            <img src="" center no-repeat id="cover_photo" height="600px" width="350px" alt="">
        </div>

        <div class="profile-header-content">
            <div class="profile-header-img">
                <img src="" center no-repeat id="profile_pic" alt="">

            </div>

            <div class="profile-header-info">
                <h4 class="m-t-sm" ><span id="FullName"></span> <span id="verifiedtag" ></span></h4>

                <p class="m-b-sm" id="TagLine">@<span id="username">{{$user_name}}</span></p>
            </div>
        </div>

        <ul class="profile-header-tab nav nav-tabs">
            <li class="active"><a href="#1a" data-toggle="tab" class="nav-link_">POSTS</a></li>
            <li class="nav-item"><a href="#2a" data-toggle="tab" class="nav-link_">ABOUT</a></li>
            <li class="nav-item"><a href="#3a" data-toggle="tab" class="nav-link_">PHOTOS</a></li>
            <li class="nav-item"><a href="#4a" data-toggle="tab" class="nav-link_">FRIENDS</a></li>
            <li class="nav-item" id="opensendMessageModal"> <a class="nav-link_"><button class="btn btn-primary">Message</button></a></li>

    </div>
</div>

<div class="container pt-5 mt-5">
    <div class="tab-content clearfix">
        <div class="tab-pane active" id="1a">
            <div class="container">
                <!-- begin tab-content -->
                <div class="tab-content p-0">
                    <!-- begin #profile-post tab -->
                    <div class="tab-pane fade active show" id="profile-post">
                        <!-- begin timeline -->
                        <ul class="timeline">

                        </ul>
                        <!-- end timeline -->
                    </div>
                    <!-- end #profile-post tab -->
                </div>
                <!-- end tab-content -->
            </div>
            <!-- end profile-content -->
        </div>



        <div class="tab-pane" id="2a">
            <div class="tab-content p-0">

                <!-- begin #profile-about tab -->
                <div class="tab-pane fade in active show" id="profile-about">
                    <!-- begin table -->
                    <div class="table-responsive">
                        <table class="table table-profile">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <h4><span id=User_full_name></span></h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr class="highlight">
                                    <td class="field">About Me</td>
                                    <td><span id="user_about_me"></span></td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr> -->
                                <tr>
                                    <td class="field">Mobile</td>
                                    <td><i class="fa fa-mobile fa-lg m-r-5"></i> <span id="user_phone_number"></span></td>
                                </tr>

                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr class="highlight">
                                    <td class="field">About Me</td>
                                    <td><span id="user_about_me"></span></td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <!-- <tr>
                                    <td class="field">Country/Region</td>
                                    <td>
                                        <span id="user_country">

                                        </span>
                                        <select class="form-control input-inline input-xs" name="region">
                                            <option value="US" selected="">United State</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                        </select>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td class="field">Current City</td>
                                    <td>
                                        <span id="user_current_city"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="field">Home Town</td>
                                    <td><span id="user_home_town"></a></td>
                                </tr>

                                <!-- <tr>
                                    <td class="field">Website</td>
                                    <td><a href="javascript:;">Add Webpage</a></td>
                                </tr> -->
                                <tr>
                                    <td class="field">Gender</td>
                                    <td> <span id="user_gender"></span> </td>
                                </tr>
                                <!-- <tr>
                                    <td class="field">Birthdate</td>
                                    <td>
                                        <select class="form-control input-inline input-xs" name="day">
                                            <option value="04" selected="">04</option>
                                        </select>
                                        -
                                        <select class="form-control input-inline input-xs" name="month">
                                            <option value="11" selected="">11</option>
                                        </select>
                                        -
                                        <select class="form-control input-inline input-xs" name="year">
                                            <option value="1989" selected="">1989</option>
                                        </select>
                                    </td>
                                </tr> -->
                                <!-- <tr>
                                    <td class="field">Language</td>
                                    <td>
                                        <select class="form-control input-inline input-xs" name="language">
                                            <option value="" selected="">English</option>
                                        </select>
                                    </td>
                                </tr> -->
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- end table -->
                </div>
                <!-- end #profile-about tab -->
            </div>
            <!-- end tab-content -->
        </div>
        <div class="tab-pane" id="3a">
            <div class="profile-container">
                <div class="row row-space-20">
                    <div class="col-md-12">
                        <div class="tab-content p-0">
                            <div class="tab-pane active show" id="profile-photos">
                                <div class="m-b-10"><b>Photos <span id="media_count"><span></b></div>
                                <ul class="img-grid-list">

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="tab-pane" id="4a">
            <div class="tab-pane fade in active show" id="profile-friends">
                <h4 class="m-t-0 m-b-20">Friend List <span id="friend_list_count"></span></h4>
                <!-- begin row -->
                <div class="row row-space-2" id="friendListData">

                    <!-- Dynamic friendList  -->

                    <!-- Dynamic friendList  -->


                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #profile-friends tab -->
    </div>
    <!-- end tab-content -->
</div>
</div>








<!-- Modal -->
<div id="sendMessageModal" class="modal fade bd-example-modal-lg" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <label for="send_message_text">Message</label>
                    <div class="form-group col-md-12">
                        <textarea id="send_message_text" style="border: 1px solid black;" name="send_message_text" rows="4" cols="90"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save_btn_for_sendMessage">Send</button>
            </div>
        </div>
    </div>
</div>
</div>


@endsection