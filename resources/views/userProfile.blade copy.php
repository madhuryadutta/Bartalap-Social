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
                <h4 class="m-t-sm" id="FullName">{{$user_name}}</h4>
                <p class="m-b-sm" id="TagLine">@<span id="username">{{$user_name}}</span></p>
            </div>
        </div>

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
                <!-- begin profile-content -->
                <div class="profile-content">
                    <!-- begin tab-content -->
                    <div class="tab-content p-0">
                        <!-- begin #profile-post tab -->
                        <div class="tab-pane fade active show" id="profile-post">
                            <!-- begin timeline -->
                            <ul class="timeline">
                                <li>
                                    <!-- begin timeline-time -->
                                    <div class="timeline-time">
                                        <span class="date">today</span>
                                        <span class="time">04:20</span>
                                    </div>
                                    <!-- end timeline-time -->
                                    <!-- begin timeline-icon -->
                                    <div class="timeline-icon">
                                        <a href="javascript:;">&nbsp;</a>
                                    </div>
                                    <!-- end timeline-icon -->
                                    <!-- begin timeline-body -->
                                    <div class="timeline-body">
                                        <div class="timeline-header">
                                            <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                            <span class="username"><a href="javascript:;">Sean Ngu</a> <small></small></span>
                                            <span class="pull-right text-muted">18 Views</span>
                                        </div>
                                        <div class="timeline-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
                                                Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
                                            </p>
                                        </div>
                                        <div class="timeline-likes">
                                            <div class="stats-right">
                                                <span class="stats-text">259 Shares</span>
                                                <span class="stats-text">21 Comments</span>
                                            </div>
                                            <div class="stats">
                                                <span class="fa-stack fa-fw stats-icon">
                                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                                    <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                                </span>
                                                <span class="fa-stack fa-fw stats-icon">
                                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                                </span>
                                                <span class="stats-total">4.3k</span>
                                            </div>
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                        </div>
                                        <div class="timeline-comment-box">
                                            <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"></div>
                                            <div class="input">
                                                <form action="">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                                        <span class="input-group-btn p-l-10">
                                                            <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end timeline-body -->
                                </li>
                                <li>
                                    <!-- begin timeline-time -->
                                    <div class="timeline-time">
                                        <span class="date">yesterday</span>
                                        <span class="time">20:17</span>
                                    </div>
                                    <!-- end timeline-time -->
                                    <!-- begin timeline-icon -->
                                    <div class="timeline-icon">
                                        <a href="javascript:;">&nbsp;</a>
                                    </div>
                                    <!-- end timeline-icon -->
                                    <!-- begin timeline-body -->
                                    <div class="timeline-body">
                                        <div class="timeline-header">
                                            <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                            <span class="username">Sean Ngu</span>
                                            <span class="pull-right text-muted">82 Views</span>
                                        </div>
                                        <div class="timeline-content">
                                            <p>Location: United States</p>
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                        </div>
                                    </div>
                                    <!-- end timeline-body -->
                                </li>
                                <li>
                                    <!-- begin timeline-time -->
                                    <div class="timeline-time">
                                        <span class="date">24 February 2014</span>
                                        <span class="time">08:17</span>
                                    </div>
                                    <!-- end timeline-time -->
                                    <!-- begin timeline-icon -->
                                    <div class="timeline-icon">
                                        <a href="javascript:;">&nbsp;</a>
                                    </div>
                                    <!-- end timeline-icon -->
                                    <!-- begin timeline-body -->
                                    <div class="timeline-body">
                                        <div class="timeline-header">
                                            <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                            <span class="username">Sean Ngu</span>
                                            <span class="pull-right text-muted">1,282 Views</span>
                                        </div>
                                        <div class="timeline-content">
                                            <p class="lead">
                                                <i class="fa fa-quote-left fa-fw pull-left"></i>
                                                Quisque sed varius nisl. Nulla facilisi. Phasellus consequat sapien sit amet nibh molestie placerat. Donec nulla quam, ullamcorper ut velit vitae, lobortis condimentum magna. Suspendisse mollis in sem vel mollis.
                                                <i class="fa fa-quote-right fa-fw pull-right"></i>
                                            </p>
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                        </div>
                                    </div>
                                    <!-- end timeline-body -->
                                </li>
                                <li>
                                    <!-- begin timeline-time -->
                                    <div class="timeline-time">
                                        <span class="date">10 January 2014</span>
                                        <span class="time">20:43</span>
                                    </div>
                                    <!-- end timeline-time -->
                                    <!-- begin timeline-icon -->
                                    <div class="timeline-icon">
                                        <a href="javascript:;">&nbsp;</a>
                                    </div>
                                    <!-- end timeline-icon -->
                                    <!-- begin timeline-body -->
                                    <div class="timeline-body">
                                        <div class="timeline-header">
                                            <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                            <span class="username">Sean Ngu</span>
                                            <span class="pull-right text-muted">1,021,282 Views</span>
                                        </div>
                                        <div class="timeline-content">
                                            <h4 class="template-title">
                                                <i class="fa fa-map-marker text-danger fa-fw"></i>
                                                795 Folsom Ave, Suite 600 San Francisco, CA 94107
                                            </h4>
                                            <p>In hac habitasse platea dictumst. Pellentesque bibendum id sem nec faucibus. Maecenas molestie, augue vel accumsan rutrum, massa mi rutrum odio, id luctus mauris nibh ut leo.</p>
                                            <p class="m-t-20">
                                                <img src="../assets/img/gallery/gallery-5.jpg" alt="">
                                            </p>
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                            <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                        </div>
                                    </div>
                                    <!-- end timeline-body -->
                                </li>
                                <li>
                                    <!-- begin timeline-icon -->
                                    <div class="timeline-icon">
                                        <a href="javascript:;">&nbsp;</a>
                                    </div>
                                    <!-- end timeline-icon -->
                                    <!-- begin timeline-body -->
                                    <div class="timeline-body">
                                        Loading...
                                    </div>
                                    <!-- begin timeline-body -->
                                </li>
                            </ul>
                            <!-- end timeline -->
                        </div>
                        <!-- end #profile-post tab -->
                    </div>
                    <!-- end tab-content -->
                </div>
                <!-- end profile-content -->
            </div>
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
                                        <h4>Micheal Meyer <small>Lorraine Stokes</small></h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="highlight">
                                    <td class="field">Mood</td>
                                    <td><a href="javascript:;">Add Mood Message</a></td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="field">Mobile</td>
                                    <td><i class="fa fa-mobile fa-lg m-r-5"></i> +1-(847)- 367-8924 <a href="javascript:;" class="m-l-5">Edit</a></td>
                                </tr>
                                <tr>
                                    <td class="field">Home</td>
                                    <td><a href="javascript:;">Add Number</a></td>
                                </tr>
                                <tr>
                                    <td class="field">Office</td>
                                    <td><a href="javascript:;">Add Number</a></td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr class="highlight">
                                    <td class="field">About Me</td>
                                    <td><a href="javascript:;">Add Description</a></td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="field">Country/Region</td>
                                    <td>
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
                                </tr>
                                <tr>
                                    <td class="field">City</td>
                                    <td>Los Angeles</td>
                                </tr>
                                <tr>
                                    <td class="field">State</td>
                                    <td><a href="javascript:;">Add State</a></td>
                                </tr>
                                <tr>
                                    <td class="field">Website</td>
                                    <td><a href="javascript:;">Add Webpage</a></td>
                                </tr>
                                <tr>
                                    <td class="field">Gender</td>
                                    <td>
                                        <select class="form-control input-inline input-xs" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
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
                                </tr>
                                <tr>
                                    <td class="field">Language</td>
                                    <td>
                                        <select class="form-control input-inline input-xs" name="language">
                                            <option value="" selected="">English</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr class="highlight">
                                    <td class="field">&nbsp;</td>
                                    <td class="p-t-10 p-b-10">
                                        <button type="submit" class="btn btn-primary width-150">Update</button>
                                        <button type="submit" class="btn btn-white btn-white-without-border width-150 m-l-5">Cancel</button>
                                    </td>
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
                    <div class="col-md-8">
                        <div class="tab-content p-0">
                            <div class="tab-pane active show" id="profile-photos">
                                <div class="m-b-10"><b>Photos (30)</b></div>
                                <ul class="img-grid-list">
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/6495ED/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/4169E1/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/FF7F50/000000" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/FF0000/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/6495ED/000000" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/B0E0E6/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/9932CC/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/DB7093/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/FF1493/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/191970/000000" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/FF8C00/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/EEE8AA/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/1E90FF/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/3CB371/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/9932CC/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/B0C4DE/000000" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/ADD8E6/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/D3D3D3/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/20B2AA/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/48D1CC/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/6495ED/000000" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/FFC0CB/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" class="img-portrait" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/DDA0DD/000000" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 hidden-xs hidden-sm">
                        <ul class="profile-info-list">
                            <li class="title">PERSONAL INFORMATION</li>
                            <li>
                                <div class="field">Occupation:</div>
                                <div class="value">UXUI / Frontend Developer</div>
                            </li>
                            <li>
                                <div class="field">Skills:</div>
                                <div class="value">C++, PHP, HTML5, CSS, jQuery, MYSQL, Ionic, Laravel, Phonegap, Bootstrap, Angular JS, Angular JS, Asp.net</div>
                            </li>
                            <li>
                                <div class="field">Birth of Date:</div>
                                <div class="value">1989/11/04</div>
                            </li>
                            <li>
                                <div class="field">Country:</div>
                                <div class="value">San Francisco</div>
                            </li>
                            <li>
                                <div class="field">Address:</div>
                                <div class="value">
                                    <address class="m-b-0">
                                        Twitter, Inc.<br />
                                        1355 Market Street, Suite 900<br />
                                        San Francisco, CA 94103
                                    </address>
                                </div>
                            </li>
                            <li>
                                <div class="field">Phone No.:</div>
                                <div class="value">
                                    (123) 456-7890
                                </div>
                            </li>
                            <li class="title">FRIEND LIST (9)</li>
                            <li class="img-list">
                                <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                                <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                                <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                                <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                                <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                                <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                                <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                                <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                                <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="4a">
            <div class="tab-pane fade in active show" id="profile-friends">
                <h4 class="m-t-0 m-b-20">Friend List (14)</h4>
                <!-- begin row -->
                <div class="row row-space-2">
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">James Pittman</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 34px, 0px);">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Mitchell Ashcroft</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Ella Cabena</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, -2px, 0px);">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Declan Dyson</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">George Seyler</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Patrick Musgrove</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Taj Connal</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Laura Pollock</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Dakota Mannix</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Timothy Woolley</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Benjamin Congreve</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Mariam Maddock</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Blake Gerrald</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 m-b-2">
                        <div class="p-10 bg-white">
                            <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Gabrielle Bunton</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:;">Action 1</a></li>
                                            <li><a href="javascript:;">Action 2</a></li>
                                            <li><a href="javascript:;">Action 3</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;">Action 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <input type="button" class="button" value="Upload" id="profile_pic_upload_btn">
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
                            <input type="button" class="button" value="Upload" id="cover_pic_upload_btn">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection