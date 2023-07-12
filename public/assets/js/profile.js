$('document').ready(function () {
   var tmp_username;
   fetchMyProfileData();
   var globalUserId;
   // ------------------------------------------ Declarations  ------------------------------------------------------------    
   var photo_type;

   // ------------------------------------------ END -- Declarations  ------------------------------------------------------------    


   // ------------------------------------------ events triggering rules ------------------------------------------------------------    
   $('#open_public_profile_edit').click(function () {
      $('#updatePublicProfileInfo').modal('show');
      fetchMyProfileData();
   });
   $('#close_modal_self_profile_update').click(function () {
      $('#updatePublicProfileInfo').modal('hide');
      ModalDataClear();
   })
   $('#save_btn_for_self_profile_update').click(function () {
      saveMyProfileData();
      $('#updatePublicProfileInfo').modal('hide');
      ModalDataClear();
   })

   $('#profile_photo_edit').click(function () {
      $('#profile_photo_edit_Modal').modal('show');
   });
   $('#cover_photo_edit').click(function () {
      $('#cover_photo_edit_Modal').modal('show');
   });

   $('#profile_pic_upload_btn').click(function () {
      saveProfilePic();
   });
   $('#cover_pic_upload_btn').click(function () {
      saveCoverPic();
   });


});

// ------------------------------------------ END -- events triggering rules -------------------------------------------------------    


// ----------------------------------------------------- functions ----------------------------------------------------------------  

function fetchMyProfileData() {
   $.ajax({
      type: "POST",
      url: "fetchMyProfileData",
      data: {},
      dataType: "json",
      success: function (response) {
         console.log(response);
         if (response.data[0].cover_pic == null || response.data[0].cover_pic == ' ' || response.data[0].cover_pic == '') {
            var cover_photo = 'https://www.bootdey.com/image/'
         }
         else {
            var cover_photo = 'AlphaStorage/' + response.data[0].cover_pic
         }
         if (response.data[0].profile_pic == null || response.data[0].profile_pic == ' ' || response.data[0].profile_pic == '') {
            var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
         }
         else {
            var profile_photo = 'AlphaStorage/' + response.data[0].profile_pic
         }
         $("#cover_photo").attr("src", cover_photo);
         $("#profile_pic").attr("src", profile_photo);
         if (response != undefined) {
            tmp_username = response.data[0].username;
            globalUserId = response.data[0].user_id;
            $("#username").val(response.data[0].username);
            $("#name").val(response.data[0].name);
            $("#gender").val(response.data[0].gender);
            $("#occupation").val(response.data[0].occupation);
            $("#dob").val(response.data[0].dob);
            $("#home_town").val(response.data[0].hometown);
            $("#current_city").val(response.data[0].current_city);
            $("#relationship_status").val(response.data[0].relationship_status);
            $("#phone_no").val(response.data[0].phone_no);
            $("#about_me").val(response.data[0].about_me);

            $("#usernameonTop").html(response.data[0].username);
            $("#User_full_name").html(response.data[0].name);
            $("#user_gender").html(response.data[0].gender);
            $("#user_home_town").html(response.data[0].hometown);
            $("#user_current_city").html(response.data[0].current_city);
            $("#user_phone_number").html(response.data[0].phone_no);
            $("#user_about_me").html(response.data[0].about_me);

            if (response.data[0].name == null || response.data[0].name == '' || response.data[0].name == ' ') {
               $("#FullName").html('Anonymous');
            }
            else {
               $("#FullName").html(response.data[0].name);
            }
            // if (response.data[0].about_me == null || response.data[0].about_me == '' || response.data[0].about_me == ' ') {
            //    $("#TagLine").html('Nothing To Say');
            // }
            // else {
            //    $("#TagLine").html(response.data[0].about_me);
            // }
            getMyFriendList(globalUserId);
            getsingleuserposts(tmp_username);
         }
      }
   });
}

function saveMyProfileData() {
   $.ajax({
      type: "POST",
      url: "saveMyProfileData",
      data: {
         "username": $("#username").val(),
         "name": $("#name").val(),
         "gender": $("#gender").val(),
         "occupation": $("#occupation").val(),
         "dob": $("#dob").val(),
         "home_town": $("#home_town").val(),
         "current_city": $("#current_city").val(),
         "relationship_status": $("#relationship_status").val(),
         "phone_no": $("#phone_no").val(),
         "about_me": $("#about_me").val()
      },
      dataType: "json",
      success: function (response) {
         console.log(response);
         fetchMyProfileData()
         // if (response != undefined) {
         //    alert('sucess');
         // }
         // else {
         //    alert('something went wrong');
         // }
      }
   });
}



function ModalDataClear() {
   $("#username").val('');
   $("#name").val('');
   $("#gender").val('');
   $("#occupation").val('');
   $("#dob").val('');
   $("#home_town").val('');
   $("#current_city").val('');
   $("#realationship_status").val('');
   $("#phone_no").val('');
   $("#about_me").val('');
}

// -------------------------------------------------- END -- functions ------------------------------------------------------------    



// -------------------------------------------------- Store profile pic ------------------------------------------------------------    
function saveProfilePic() {
   var fd = new FormData();
   var files = $('#file')[0].files[0];
   fd.append('file', files);
   $.ajax({
      url: 'saveMyProfilePic',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
      success: function (response) {
         if (response != 0) {
            $("#img").attr("src", response);
            $(".preview img").show(); // Display image element
         } else {
            alert('file not uploaded');
         }
         $('#profile_photo_edit_Modal').modal('hide');
         fetchMyProfileData();
      },
   });
}
// -------------------------------------------------- Store Cover pic ------------------------------------------------------------    
function saveCoverPic() {
   var fd = new FormData();
   var files = $('#file1')[0].files[0];
   fd.append('file', files);
   $.ajax({
      url: 'saveMyCoverPic',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
      success: function (response) {
         if (response != 0) {
            $("#img").attr("src", response);
            $(".preview img").show(); // Display image element
         } else {
            alert('file not uploaded');
         }
         $('#cover_photo_edit_Modal').modal('hide');
         fetchMyProfileData();
      },
   });
}

// -------------------------------------------------- END -- Store cover pic ------------------------------------------------------------    



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
               var postMedia = ''
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
                           <div class="media-body valign-middle text-right overflow-visible">
                               <div class="btn-group dropdown">
                                   <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                   <ul class="dropdown-menu dropdown-menu-right">
                                       <li><a  class="request_btn" data-user=`+ obj.id + ` data-code="BLCK">Block</a></li>
                                       <li><a class="request_btn" data-user=`+ obj.id + ` data-code="REPT">Report</a></li>
                                   </ul>
                               </div>
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



let createPostForm = document.querySelector("#create-post-form");
let createPostMedia = document.querySelector("#create-post-media");
let createPostText = document.querySelector("#create-post-txt");
let createPostSubmitBtn = document.querySelector("#create-post-submit-btn");
let mediaLabel = document.querySelector('[for="create-post-media"]');
let postsContainer = document.querySelector("#posts-container");
let mediaContainer = document.querySelector("#create-post-media-wrap");

// mediaLabel.addEventListener("keypress", e => {
//   if (e.key === "Enter") {
//     e.target.click();
//   }
// });

createPostForm.addEventListener("submit", handleSubmit, false);
createPostMedia.addEventListener("input", handleAddImg, false);

createPostText.addEventListener("input", watchInputs, false);
createPostMedia.addEventListener("change", watchInputs, false);

function watchInputs() {
   if (createPostText.value === "" && createPostMedia.value === "") {
      createPostSubmitBtn.setAttribute("disabled", "true");
      createPostForm.removeEventListener("submit", handleSubmit, false);
   } else {
      createPostSubmitBtn.removeAttribute("disabled");
      createPostForm.addEventListener("submit", handleSubmit, false);
   }
}

function generateImgPreview(file) {
   let reader = new FileReader();

   reader.readAsDataURL(file);
   reader.onloadend = () => {
      let preview = `
			<figure class="create-post__media-item">
				<button type="button" aria-label="delete image">
					<img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/close.svg" alt="" />
				</button>
				<img src="${reader.result}" alt="" />
			</figure>	
		`;

      mediaContainer.innerHTML = preview;

      let closeBtn = mediaContainer.querySelector("button");
      closeBtn.addEventListener("click", removeCreatePostImg, false);
   };
}

function handleAddImg(e) {
   const file = e.target.files[0];

   if (!isValidImage(file)) {
      createPostMedia.value = "";
      return;
   }

   generateImgPreview(file);
}

watchInputs();

/* Generate post functions */
async function handleSubmit(e) {
   e.preventDefault();

   let postContent = {
      text: createPostText.value,
      img: createPostMedia.files[0]
   };


   let post = await createPost(postContent);
   postsContainer.insertAdjacentHTML("afterbegin", post);
   cleanCreatePost();
}

async function createPost(postContent) {
   let header = generateHeader();
   let body = await generateBody(postContent);
   let footer = generateFooter();

   let post = `
		<article class="post">
			<img class="post__avatar" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/avatar-tumblr.png" alt="" />
		
			<div class="post__content">
				${header}
				${body}
				${footer}
			</div>
		</article>
	`;

   return post;
}

function generateHeader() {
   let header = `
		<header class="post__header">
			<p class="post__user">galactiqangel</p>

			<div class="post__meta">
				<p class="post__reblogs">3,908</p>

				<button class="post__header-btn">
					<img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/reblog-tumblr.svg" alt="" />
				</button>
				<button class="post__header-btn">
					<img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/heart-tumblr.svg" alt="" />
				</button>
			</div>
		</header>
	`;

   return header;
}

async function generateBody(postContent) {
   let bodyContent = await generateBodyContent(postContent);

   let body = `
		<div class="post__body">
			${bodyContent}
		</div>
	`;

   return body;
}

async function generateBodyContent(postContent) {
   // https://benhoyt.com/writings/dont-sanitize-do-escape/
   let content = "";

   if (postContent.img) {
      content += await generatePostImg(postContent.img);
   }

   if (postContent.text) {
      // https://stackoverflow.com/questions/863779/how-to-add-line-breaks-to-an-html-textarea
      content += `
			<p class="post__text">
				${sanitizeText(postContent.text)}
			</p>
		`;
   }

   return content;
}

function generatePostImg(fileImg) {
   // https://codepen.io/Anveio/pen/XzYBzX
   let reader = new FileReader();

   return new Promise((resolve, reject) => {
      reader.onerror = () => {
         reader.abort();
         reject(new DOMException("Problem parsing input file."));
      };

      reader.onload = () => {
         resolve(`<img class="post__img" src="${reader.result}" alt="" />`);
      };
      reader.readAsDataURL(fileImg);
   });
}

function generateFooter() {
   let footer = `
	<div class="post__footer">
		<span>#2010s</span>
		<span>#tumblr</span>
		<span>#codepen</span>
	</div>
	`;

   return footer;
}

/* Sanitization functions  */
function sanitizeText(text) {
   // https://remarkablemark.org/blog/2019/11/29/javascript-sanitize-html/
   var element = document.createElement("div");
   element.innerText = text.trim();
   return element.innerHTML;
}

/* Clean functions */
function cleanCreatePost() {
   createPostText.value = "";
   removeCreatePostImg();
   watchInputs();
}

function removeCreatePostImg() {
   mediaContainer.innerHTML = "";
   createPostMedia.value = "";
   watchInputs();
}

/* Image validation images */
function isValidImage(file) {
   let isValid = isValidFileSize(file) && isValidFileSize(file);
   return isValid;
}

function isValidFileType(file) {
   const fileTypes = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
   return fileTypes.includes(file.type);
}

function isValidFileSize(file) {
   if (file.size > 1048576) {
      alert("Please upload an image smaller than 1MB");
   }
   return file.size < 1048576;
}


