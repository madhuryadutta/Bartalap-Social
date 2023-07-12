var file;
$('document').ready(function () {
  fetchHomePosts()
  trigger();
  fetchFriendRequest()

  $(document).on("click", ".upvote_downvote", function (data) {
    var post_id = ($(this).attr("data-postId"));
    var vote = ($(this).attr("data-vote"));
    postReaction(post_id, vote);
  });

  $(document).on("click", ".action_button", function (data) {
    var response_type = ($(this).attr("data-code"));
    var request_no = ($(this).attr("data-requestNo"));
    friendRequestAction(request_no, response_type);
  });
  $(document).on("click", ".new_comment", function (data) {
    var post_id = ($(this).attr("data-postId"));
    $('#' + post_id).show();
    var comment_id = 0;
    var comment_ref = 0;
    var comment_type = 'TXT';
    $(document).on("click", ".send_btn", function () {
      let comment_text = ($('#input' + post_id).val());
      Newcomment(post_id, comment_id, comment_ref, comment_type, comment_text, mention_user)
    })
  });

  // ------------------------------------------ events triggering rules ------------------------------------------------------------    
  $('#open_post_create_modal').click(function () {
    $('#create_new_post_modal_id').modal('show');
  });

  $("#create-post-media").change(function () {
    file = this.files[0];
    if (file) {
      let reader = new FileReader();
      reader.onload = function (event) {
        $("#imgPreview")
          .attr("src", event.target.result);
      };
      reader.readAsDataURL(file);
    }
  });

  $('#create-post-submit-btn').click(function (e) {
    e.preventDefault();
    savePostData();
  })



});

function trigger() {
  $.ajax({
    type: "POST",
    url: "/trigger",
    data: {},
    dataType: "json",
    success: function (response) {
      console.log(response);
      if (response != undefined) {
      }
    }
  });
}


function postReaction(post_id, vote) {
  $.ajax({
    type: "POST",
    url: "send_reaction",
    data: {
      "post_id": post_id,
      "vote": vote,
    },
    dataType: "json",
    success: function (response) {
      console.log(response);
      if (response != undefined) {
        fetchHomePosts();
      }
    }
  });
}

function getReactionOfMyown(post_id) {
  $.ajax({
    type: "POST",
    url: "getReactionOfMyown",
    data: {
      "post_id": post_id,
    },
    dataType: "json",
    success: function (response) {
      if (response.data[0] != undefined) {
        console.log('1');
        // return response.data[0].vote;
        return 1;
      }
      else {
        console.log('0');
        return 0;
      }
    }
  });
}


function fetchHomePosts() {
  $.ajax({
    type: "POST",
    url: "fetchHomePosts",
    data: {},
    dataType: "json",
    success: function (response) {
      let homePostContents = '';
      let ActionPart = '';
      let ActionTitle = '';
      if (response.outmsg[0]['message'] == 1) {
        $.each(response.data, function (index, obj) {

          if (obj.profile_pic == null || obj.profile_pic == ' ' || obj.profile_pic == '') {
            var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
          }
          else {
            var profile_photo = 'AlphaStorage/' + obj.profile_pic;
          }
          if (obj.reaction == null || obj.reaction == ' ' || obj.reaction == '' || obj.reaction == 0) {
            ActionTitle = ``;
            ActionPart = `<div class="action-buttons">
          <div class="interaction-buttons">
            <span class="upvote_downvote" data-postId=`+ obj.id + ` data-vote="UP"><button><i class="fa-regular fa-circle-up fa-beat fa-lg"></i></button></span>
            <span class="upvote_downvote" data-postId=`+ obj.id + ` data-vote="DO"><button><i class="fa-regular fa-circle-down fa-beat fa-lg"></i></button></span>
           <span class="new_comment" style="margin-left:10px" data-postId=`+ obj.id + `><button><i class="fa-regular fa-comment fa-lg" ></i></button></span>
         </div></span>
         <!--    <span><i class="uil uil-share-alt"></i></span> -->
          </div>`
          }
          else if (obj.reaction == 'DO') {
            ActionTitle = ` <div class="caption">
            <p style=" font-size: 10px; ">You Downvote This post</p>
          </div>`;
            ActionPart = `<div class="action-buttons">
            <div class="interaction-buttons">
              <span class="upvote_downvote" data-postId=`+ obj.id + ` data-vote="0"><button><i class="fa-sharp fa-solid fa-circle-down fa-lg" style="color: #00ff04;"></i><button></span>
              <span class="new_comment" style="margin-left:10px" data-postId=`+ obj.id + `><button><i class="fa-regular fa-comment fa-lg" ></i></button></span>
              <!--    <span><i class="uil uil-share-alt"></i></span> -->
            </div>`
          }
          else if (obj.reaction == 'UP') {
            ActionTitle = ` <div class="caption">
            <p style=" font-size: 10px; ">You Upvote This post</p>
          </div>`;
            ActionPart = `<div class="action-buttons">
            <div class="interaction-buttons">
              <span class="upvote_downvote" data-postId=`+ obj.id + ` data-vote="0"><button><i class="fa-solid fa-circle-up fa-lg" style="color: #00ff04;"></i></button></span>
              <span class="new_comment" style="margin-left:10px" data-postId=`+ obj.id + `><button><i class="fa-regular fa-comment fa-lg" ></i></button></span>         
              <!--    <span><i class="uil uil-share-alt"></i></span> -->
            </div>`
          }
          if (obj.post_media == null || obj.post_media == ' ' || obj.post_media == '') {
            var postMedia = ''
          }
          else {
            var media_location = 'userposts/' + obj.post_media;
            postMedia = `<div class="photo">
                        <img src=`+ media_location + `>
                      </div>`

          }


          homePostContents += `<div class="feed">
                    <div class="head">
                      <div class="user"  >

                        <div class="profile-photo">
                          <img src=`+ profile_photo + `>
                        </div>
                        <div class="ingo">
                        <a href="user/` + obj.username + `">
                        <h3>`+ obj.name + `</h3>
                        </a>
                          <small>`+ obj.post_location + `,` + obj.created_at + `</small>
                        </div>
                      </div>
                      <span class="edit">
                        <i class="uil uil-ellipsis-h"></i>
                      </span>
                    </div>
                   `+ postMedia + `
                   `+ ActionPart + `
                     <!-- <div class="bookmark">
                        <span><i class="uil uil-bookmark-full"></i></span>
                      </div> -->
                    </div>
                    `+ ActionTitle + `                  
                    <div class="caption">
                      <p style="font-size: 17px;font-family: ui-sans-serif;">`+ obj.post_text + `</p>
                    </div>
                    <div class="form-group" id=`+ obj.id + `><div class="row">
                    <div class="col-11" >
                   <input type="text" class="form-control" id=input`+ obj.id + `> </div><div class="col-1"><button class="btn btn-primary send_btn">Send</button></div></div></div>
                    <div class="comments text-muted">View all 277 comments</div>
                  </div>`
        })
      }
      else {
      }
      $(".feeds").html(homePostContents);
      $('.form-group').hide();

    }
  });
}

function savePostData() {
  var text = $('#create-post-txt').val();
  var fd = new FormData();
  var files = $('#create-post-media')[0].files[0];
  fd.append('file', files);
  fd.append('text', text);
  $.ajax({
    type: "POST",
    url: "createpost",
    data: fd,
    contentType: false,
    processData: false,
    success: function (response) {
      console.log(response);
      $('#create_new_post_modal_id').modal('hide');
      ModalDataClear();
      fetchHomePosts();
    }
  });
}

function Newcomment(post_id, comment_id, comment_ref, comment_type, comment_text) {
  $.ajax({
    type: "POST",
    url: "/newComment",
    data: {
      "post_id": post_id,
      "comment_id": comment_id,
      "comment_ref": comment_ref,
      "comment_type": comment_type,
      "comment_text": comment_text
    },
    dataType: "json",
    success: function (response) {
      console.log(response);
      if (response != undefined) {
        fetchHomePosts();
      }
    }
  });
}



function fetchFriendRequest() {
  $.ajax({
    type: "POST",
    url: "view_request",
    data: {},
    dataType: "json",
    success: function (response) {
      let FriendRequestContents = '';
      if (response.data.length > 0) {
        FriendRequestContents += '<h4>Requests</h4>';
        $.each(response.data, function (index, obj) {
          if (obj.profile_pic == null || obj.profile_pic == ' ' || obj.profile_pic == '') {
            var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
          }
          else {
            var profile_photo = 'AlphaStorage/' + obj.profile_pic;
          }
          FriendRequestContents += `<div class="request">
            <div class="info">
              <div class="profile-photo">
                <img src=`+ profile_photo + ` alt="">
              </div>
              <div>
                <h5>`+ obj.name + `</h5>
                <p class="text-muted"> 0 mutual friends</p>
              </div>
            </div>
            <div class="action">
              <button class="btn btn-primary action_button" data-requestNo=`+ obj.id + ` data-code="FRND" > Accept </button>
              <button class="btn action_button" data-requestNo=`+ obj.id + ` data-code="REJ"> Decline</button>
            </div>
            </div>`;
        })
      }
      else {
        FriendRequestContents += `<h4> 0 Requests <h4>`;
      }
      $(".friend-requests").html(FriendRequestContents);
    }
  });
}


function friendRequestAction(R_no, R_type) {
  $.ajax({
    type: "POST",
    url: "reponse_to_request",
    data: {
      "R_no": R_no,
      "R_type": R_type,
    },
    dataType: "json",
    success: function (response) {
      console.log(response);
      if (response != undefined) {
        console.log(response.data.length);
        fetchFriendRequest();
      }
    }
  });
}


// function ModalDataClear(){

// }


{/* <div class="liked-by">
                      <span><img src="./images/profile-10.jpg"></span>
                      <span><img src="./images/profile-4.jpg"></span>
                      <span><img src="./images/profile-15.jpg"></span>
                      <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
                    </div> */}


                              // ActionPart = `<div class="action-buttons">
          // <div class="interaction-buttons">
          //   <span class="upvote_downvote" data-postId=`+ obj.id + ` data-vote="UP"><button><i class="fa fa-thumbs-up"></i><button></span>
          //   <span class="upvote_downvote" data-postId=`+ obj.id + ` data-vote="DO"><button><i class="fa fa-thumbs-down"></i></button></span>
          //   <span class="upvote_downvote" data-postId=`+ obj.id + ` data-vote="UP"><button><i style="font-size:24px" class="fa">&#xf087;</i></button></span>
          //   <span class="upvote_downvote" data-postId=`+ obj.id + ` data-vote="DO"><button><i class="fa fa-thumbs-down" style="color:black;opacity: .5;"></i><button></span>
          //   <span><button><i class="uil uil-comment-dots"></i><button></span>
          //   <!--    <span><i class="uil uil-share-alt"></i></span> -->
          // </div>`