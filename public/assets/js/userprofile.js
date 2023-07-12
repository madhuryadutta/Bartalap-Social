$('document').ready(function () {
   let tmp_username = $('#username').html();
   var globalUserId;
   fetchProfileData(tmp_username);
   getsingleuserposts(tmp_username)

   $('#opensendMessageModal').click(function () {
      $('#sendMessageModal').modal('show');
   });

   $('#save_btn_for_sendMessage').click(function () {
      var msg = $("#send_message_text").val();
      var newMsg = '0'
      saveMessage(msg, newMsg);
   })



});
function fetchProfileData(tmp_username) {

   $.ajax({
      type: "POST",
      url: "/fetchUserProfileData",
      data: {
         "username": tmp_username
      },
      dataType: "json",
      success: function (response) {
         if (response.data[0].cover_pic == null || response.data[0].cover_pic == ' ' || response.data[0].cover_pic == '') {
            var cover_photo = 'https://www.bootdey.com/image/'
         }
         else {
            var cover_photo = '/AlphaStorage/' + response.data[0].cover_pic
         }
         if (response.data[0].profile_pic == null || response.data[0].profile_pic == ' ' || response.data[0].profile_pic == '') {
            var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
         }
         else {
            var profile_photo = '/AlphaStorage/' + response.data[0].profile_pic
         }
         $("#cover_photo").attr("src", cover_photo);
         $("#profile_pic").attr("src", profile_photo);

         if (response != undefined) {
            globalUserId = response.data[0].user_id;
            $("#username").val(response.data[0].username);
            $("#occupation").val(response.data[0].occupation);
            $("#dob").val(response.data[0].dob);
            $("#relationship_status").val(response.data[0].relationship_status);

            $("#User_full_name").html(response.data[0].name);
            $("#user_gender").html(response.data[0].gender);
            $("#user_home_town").html(response.data[0].hometown);
            $("#user_current_city").html(response.data[0].current_city);
            $("#user_phone_number").html(response.data[0].phone_no);
            $("#user_about_me").html(response.data[0].about_me);
            if (response.data[0].bluetick == 0) {
               $("#verifiedtag").html('<b style="color:blue;background-color:white;border-radius:15%">Verified<b>')
            }
            if (response.data[0].name == null || response.data[0].name == '' || response.data[0].name == ' ') {
               $("#FullName").html('Anonymous');
            }
            else {
               $("#FullName").html(response.data[0].name);
            }
            if (response.data[0].about_me == null || response.data[0].about_me == '' || response.data[0].about_me == ' ') {
               $("#TagLine").html('Nothing To Say');
            }
            else {
               $("#TagLine").html(response.data[0].about_me);
            }
         }
         getMyFriendList(globalUserId);
      }
   });
}



function getsingleuserposts(tmp_username) {
   let post_content = '';
   let photos_content = '';
   let media_count = 0;
   $.ajax({
      type: "POST",
      url: "/getsingleuserposts",
      data: {
         "username": tmp_username
      },
      dataType: "json",
      success: function (response) {
         $.each(response.data, function (index, obj) {
            if (obj.profile_pic == null || obj.profile_pic == ' ' || obj.profile_pic == '') {
               var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
            }
            else {
               var profile_photo = '/AlphaStorage/' + obj.profile_pic;
            }

            if (obj.post_media == null || obj.post_media == ' ' || obj.post_media == '') {
               var postMedia = ``
            }
            else {
               var media_location = '/userposts/' + obj.post_media;
               postMedia = `<div class="photo">
                           <img src=`+ media_location + `>
                         </div>`

            }

            let post_date = obj.created_at.substring(0, 10);
            let post_time = obj.created_at.substring(11, 19);
            post_content += ` <li>
            <!-- begin timeline-time -->
            <div class="timeline-time">
                <span class="date">`+ post_date + `</span> 
                <span class="time">`+ post_time + `</span>
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
                    <span class="userimage"><img src=`+ profile_photo + ` alt=""></span>
                    <span class="username"><a href="javascript:;">`+ obj.name + `</a> <small></small></span>
                    <!-- <span class="pull-right text-muted">18 Views</span> -->
                </div>
                <div class="timeline-content">
                    <p id="post_text_Style">     `+ obj.post_text + `    </p>
                      `+ postMedia + `  
                </div>
                <!--  <div class="timeline-likes">
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
                </div>-->
            </div>
            <!-- end timeline-body -->
            </li>`
            if (media_location != ' ' || media_location != '' || media_location != null) {
               photos_content += `<li> <a href="#"><img src=` + media_location + ` alt="" /></a></li>`
               media_count += 1;
            }
         });
         $(".timeline").html(post_content);
         $(".img-grid-list").html(photos_content);
         $("#media_count").html(media_count);
      }

   });
}



function getMyFriendList(globalUserId) {
   $.ajax({
      type: "POST",
      url: "/getMyFriendList",
      data: {
         "user_id": globalUserId
      },
      dataType: "json",
      success: function (response) {
         console.log(response);
         if (response.data[0].profile_pic == null || response.data[0].profile_pic == ' ' || response.data[0].profile_pic == '') {
            var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
         }
         else {
            var profile_photo = 'AlphaStorage/' + response.data[0].profile_pic
         }
         if (response != undefined) {
            console.log(response.data.length);
            $("#friend_list_count").html('(' + response.data.length + ')');
            var friendListData = '';
            $.each(response.data, function (index, obj) {
               if (obj.profile_pic == null || response.data[0].profile_pic == ' ' || response.data[0].profile_pic == '') {
                  var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
               }
               else {
                  var profile_photo = '/AlphaStorage/' + obj.profile_pic
               }
               friendListData += `<div class="col-md-6 m-b-2">
                   <div class="p-10 bg-white">
                       <div class="media media-xs overflow-visible">
                           <a class="media-left" href="javascript:;">
                               <img src="` + profile_photo + `" alt="" class="media-object img-circle">
                           </a>
                           <div class="media-body valign-middle">
                           <a href="/user/` + obj.username + `">
                               <b class="text-inverse">`+ obj.name + `</b>
                               <a>
                           </div>
                       </div>
                   </div>
               </div> `
            });
            $("#friendListData").html(friendListData);
            // 
         }
      }
   });
}

function saveMessage(text, msgId) {
   $.ajax({
      type: "POST",
      url: "/sendMessage",
      data: {
         "msg_data": text,
         "receiver": globalUserId,
         "msg_id": msgId
      },
      dataType: "json",
      success: function (response) {
         console.log(response);
         $('#sendMessageModal').modal('hide');
         $("#send_message_text").val(' ');
      }
   });
}

