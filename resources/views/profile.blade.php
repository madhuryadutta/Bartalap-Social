@extends('common.main')
@push('title')
<title>Profile</title>
@endpush
@push('jsfile')
<script src="{{ asset('assets/js/profile.js') }}"></script>
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
                <button data-toggle="modal" id="profile_photo_edit" class="absolute bottom-0 right-0  bg-white px-3 py-0 text-sm text-blue-500 shadow-sm rounded hover:bg-blue-800 m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    Edit
                </button>

            </div>

            <div class="profile-header-info">
                <h4 class="m-t-sm" id="FullName"></h4>
                <p class="m-b-sm" id="TagLine">@<span id="usernameonTop"></span></p>
                <a class="btn btn-xs btn-primary mb-4" data-toggle="modal" id="open_public_profile_edit">Edit
                    Profile</a>
            </div>
        </div>
        <button data-toggle="modal" id="cover_photo_edit" class="absolute bottom-7 right-0  bg-white px-3 py-0 text-sm text-blue-500 shadow-sm rounded hover:bg-blue-800 m-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
            Edit
        </button>

        <ul class="profile-header-tab nav nav-tabs">
            <li class="active"><a href="#1a" data-toggle="tab" class="nav-link_">POSTS</a></li>
            <li class="nav-item"><a href="#2a" data-toggle="tab" class="nav-link_">ABOUT</a></li>
            <li class="nav-item"><a href="#3a" data-toggle="tab" class="nav-link_">PHOTOS</a></li>
            <li class="nav-item"><a href="#4a" data-toggle="tab" class="nav-link_">FRIENDS</a></li>

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






</div>

</div>
</div>
<div>







    <!-- Modal -->
    <div id="updatePublicProfileInfo" class="modal fade bd-example-modal-lg" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Public Profile</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" id="username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="gender">Gender</label>
                            <select id="gender" class="form-control">
                                <option selected>Choose...</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="occupation">Occupation</label>
                            <input type="text" class="form-control" id="occupation">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dob">DOB</label>
                            <input type="date" class="form-control" id="dob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="current_city">Current City</label>
                            <input type="text" class="form-control" id="current_city">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="home_town">Home Town</label>
                            <input type="text" class="form-control" id="home_town">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="relationship_status">Relationship Status</label>
                            <select id="relationship_status" class="form-control">
                                <option selected>Choose...</option>
                                <option value="S">Single</option>
                                <option value="M">Married</option>
                                <option value="D">Divorced</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="phone_no">Phone No</label>
                            <input type="text" class="form-control" id="phone_no">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="about_me">About Me</label>
                            <input type="text" class="form-control" id="about_me">
                        </div>
                        <!-- </div>
                </div> -->


                        <!-- <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_modal_self_profile_update">Close</button>
                        <button type="button" class="btn btn-primary" id="save_btn_for_self_profile_update">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="profile_photo_edit_Modal" class="modal fade bd-example-modal-lg" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profile Photo upload</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="" enctype="multipart/form-data" id="myform">
                            <div class='preview'>
                                <img src="" id="img" width="100" height="100">
                            </div>
                            <div class="form-group">
                                <input type="file" id="file" name="file" />
                                <input type="button" class="button btn btn-primary" value="Upload" id="profile_pic_upload_btn">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="cover_photo_edit_Modal" class="modal fade bd-example-modal-lg" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cover photo upload</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="" enctype="multipart/form-data" id="myform">
                            <div class='preview'>
                                <img src="" id="img" width="100" height="100">
                            </div>
                            <div class="form-group">
                                <input type="file" id="file1" name="file1" />
                                <input type="button" class="button btn btn-primary" value="Upload" id="cover_pic_upload_btn">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection