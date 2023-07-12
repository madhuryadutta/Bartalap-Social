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

        <ul class="profile-header-tab nav nav-tabs">
            <li class="nav-item"><a href="https://www.bootdey.com/snippets/view/bs4-profile-with-timeline-posts" target="__blank" class="nav-link_">POSTS</a></li>
            <li class="nav-item"><a href="https://www.bootdey.com/snippets/view/bs4-profile-about" target="__blank" class="nav-link_">ABOUT</a></li>
            <li class="nav-item"><a href="https://www.bootdey.com/snippets/view/profile-photos" target="__blank" class="nav-link_">PHOTOS</a></li>
            {{-- <li class="nav-item"><a href="https://www.bootdey.com/snippets/view/profile-videos" target="__blank" class="nav-link_">VIDEOS</a></li> --}}
            <li class="nav-item"><a href="https://www.bootdey.com/snippets/view/bs4-profile-friend-list" target="__blank" class="nav-link_ active show">FRIENDS</a></li>
            {{-- <li class="nav-item"> <a class="btn btn-xs btn-primary mb-4" data-toggle="modal"  id="cover_photo_edit">
                Edit
            </a></li>
            <li class="nav-item"> <a class="btn btn-xs btn-primary mb-4" data-toggle="modal"  id="profile_photo_edit">
                Edit
            </a></li> --}}


        </ul>
        <button data-toggle="modal" id="cover_photo_edit" class="absolute bottom-7 right-0  bg-white px-3 py-0 text-sm text-blue-500 shadow-sm rounded hover:bg-blue-800 m-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
            Edit
        </button>
        {{-- <a class="btn btn-xs btn-primary mb-4" data-toggle="modal"  id="cover_photo_edit">
            Edit
        </a> --}}
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