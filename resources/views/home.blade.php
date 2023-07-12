@extends('common.main')
@push('title')
<title>Home</title>
@endpush
@push('jsfile')
<script src="{{ asset('assets/js/home.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endpush
@section('main-section')
<div class="container">
  <!--==================m  LEFT   ======================-->
  <div class="left">
    <a class="profile">
      <div class="profile-photo">
        <img src="" id="profile_photo_home">
        <!-- <img src="./images/profile-1.jpg"> -->
      </div>
      <div class="handle">
        <h4 id="name_home_page"></h4>
        <p class="text-muted" id="username_home_page"> </p>
      </div>
    </a>

    <!---------------    SIDEBAR   ----------------->
    <div class="sidebar">
      <a class="menu-item active">
        <span><i class="uil uil-home"></i></span>
        <h3>Home</h3>
      </a>
      {{-- <a class="menu-item">
        <span><i class="uil uil-compass"></i></span>
        <h3>Explore</h3>
      </a> --}}
      {{-- <a class="menu-item" id="notifications" href="{{route('messages')}}" style="text-decoration:none;">
        <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span>
        <h3>Notifications</h3>
      </a> --}}
      <a class="menu-item" id="messages-notification" href="{{route('messages')}}" style="text-decoration:none;">
        <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span>
        <h3>Messages</h3>
      </a>
      {{-- <a class="menu-item">
        <span><i class="uil uil-bookmark"></i></span>
        <h3>Bookmarks</h3>
      </a> --}}
      {{-- <a class="menu-item">
        <span><i class="uil uil-chart-line"></i></span>
        <h3>Analytics</h3>
      </a> --}}
      {{-- <a class="menu-item" id="theme">
        <span><i class="uil uil-palette"></i></span>
        <h3>Theme</h3>
      </a> --}}
      <a class="menu-item">
        <span><i class="uil uil-setting"></i></span>
        <h3>Settings</h3>
      </a>
    </div>
    <!-------------------------   END OF SIDEBAR   ----------------->
    <label for="create-post" data-toggle="modal" id="open_post_create_modal" class="btn btn-primary">Create Post</label>
  </div>
  <!-----------------------------    END OF LEFT   -------------------------->



  <!--==================  MIDDLE   ====================-->
  <div class="middle">
    <!-----------------------  STORIES   -------------------->
    <!-- <div class="stories">
      <div class="story">
        <div class="profile-photo">
          <img src="./images/profile-8.jpg">
        </div>
        <p class="name">Your Story</p>
      </div>
      <div class="story">
        <div class="profile-photo">
          <img src="./images/profile-9.jpg">
        </div>
        <p class="name">Lilla James</p>
      </div>
      <div class="story">
        <div class="profile-photo">
          <img src="./images/profile-10.jpg">
        </div>
        <p class="name">Winnie Hale</p>
      </div>
      <div class="story">
        <div class="profile-photo">
          <img src="./images/profile-11.jpg">
        </div>
        <p class="name">Daniel Bale</p>
      </div>
      <div class="story">
        <div class="profile-photo">
          <img src="./images/profile-12.jpg">
        </div>
        <p class="name">Jane Doe</p>
      </div>
      <div class="story">
        <div class="profile-photo">
          <img src="./images/profile-13.jpg">
        </div>
        <p class="name">Tina White</p>
      </div>
    </div> -->
    <!---------------------  END OF STORIES   -------------->
    {{-- <form class="create-post">
      <div class="profile-photo">
        <img src="" id="profile_pic_near_post">
      </div>
      <textarea placeholder="What's on your mind, Ritha?" rows="4" cols="50" id="create-post"></textarea>
      <input type="submit" value="Post" class="btn btn-primary">
    </form> --}}

    <!-----------------------   FEEDS    ------------------------>
    <div class="feeds">
     
      <!------------------Dynamicaly Generated  ------------------>

      <!------------------Dynamicaly Generated  ------------------>
    </div>
    <!----------------------END OF FEEDS  --------------------->
  </div>
  <!--======================  END OF MIDDLE   ====================-->


  <!--==================  RIGHT  =====================-->
  <div class="right">
    <!-----------------   FRIEND REQUESTS    ------------->
    <div class="friend-requests">

    <!-----------------  FRIEND REQUEST LIST TO BE GENERATED DYNAMICALLY   -------------->

    <!-----------------  FRIEND REQUEST LIST TO BE GENERATED DYNAMICALLY   -------------->

    </div>
  </div>
  <!--====================   END OF RIGHT  =====================-->
</div>
</main>

<!--====================   THEME CUSTOMIZATION  =====================-->
<div class="customize-theme">
  <div class="card">
    <h2>Customize your view</h2>
    <p class="text-muted">Manage your font-size, color, and background</p>

    <!---------------   FONT SIZES  --------------->
    <div class="font-size">
      <h4>Font Size</h4>
      <div>
        <h6>Aa</h6>
        <div class="choose-size">
          <span class="font-size-1"></span>
          <span class="font-size-2 active"></span>
          <span class="font-size-3"></span>
          <span class="font-size-4"></span>
          <span class="font-size-5"></span>
        </div>
        <h3>Aa</h3>
      </div>
    </div>

    <!-----------   PRIMARY COLORS  ------------>
    <div class="color">
      <h4>Color</h4>
      <div class="choose-color">
        <span class="color-1 active"></span>
        <span class="color-2"></span>
        <span class="color-3"></span>
        <span class="color-4"></span>
        <span class="color-5"></span>
      </div>
    </div>

    <!---------  BACKGROUND COLORS   --------------->
    <div class="background">
      <h4>Background</h4>
      <div class="choose-bg">
        <div class="bg-1 active">
          <span></span>
          <h5 for="bg-1">Light</h5>
        </div>
        <div class="bg-2">
          <span></span>
          <h5>Dim</h5>
        </div>
        <div class="bg-3">
          <span></span>
          <h for="bg-3">Lights Out</h>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="create_new_post_modal_id" class="modal fade bd-example-modal-lg" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="create-post">
          <img class="create-post__avatar" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/avatar-tumblr.png" alt="" />
          <form id="create-post-form" class="create-post__form" action="">
            <div class="create-post__text-wrap">
              <textarea aria-label="Write something about you..." name="post-text" id="create-post-txt" oninput="this.parentNode.dataset.replicatedValue = this.value" placeholder="Write something about you..."></textarea>
            </div>

            <div class="create-post__media-wrap" id="create-post-media-wrap">
              <figure class="create-post__media-item">
                <button type="button" aria-label="delete image">
                  <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/close.svg" alt="" />
                </button>
                <img src="" alt="" id="imgPreview" />
              </figure>
            </div>
            <div class="create-post__buttons">
              <div class="create-post__assets-buttons">
                <button type="button" aria-label="Add an image to the post" class="create-post__asset-btn" for="create-post-media" onclick="this.querySelector('input').click()">
                  <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/camera-tumblr.svg" alt="" />
                  Photo
                  <input type="file" name="post-img" id="create-post-media" accept=".png, .jpg, .jpeg, .gif" />
                </button>
                <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
                  <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/quote-tumblr.svg" alt="" />
                  Quote
                </button>
                <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
                  <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/link-tumblr.svg" alt="" />
                  Link
                </button>
                <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
                  <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/chat-tumblr.svg" alt="" />
                  Chat
                </button>
                <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
                  <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/audio-tumblr.svg" alt="" />
                  Audio
                </button>
                <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
                  <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/video-tumblr.svg" alt="" />
                  Video
                </button>
              </div>
              <button class="btn btn-light text-primary" style="border: 1px solid red;" id="create-post-submit-btn">Post</button>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</div>
@endsection