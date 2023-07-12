var file;
var global_reciver_id;
$('document').ready(function () {
    $(".type_msg").hide();
    fetchMessagePeopleList();


    // ------------------------------------------ events triggering rules ------------------------------------------------------------    
    $(document).on("click", ".edit_message", function (data) {
        $('#modal_edit_message').modal('show');
        let Msgid = ($(this).attr("data-id"));
        let beforeStrReplc = ($(this).attr("data-msg"));
        let regex = /~/ig;
        let afterStrReplc = beforeStrReplc.replaceAll(regex, ' ')
        $('#edit_msg').val(afterStrReplc);
        $('#submit_edit_msg').click(function () {
            let MsgText = $('#edit_msg').val();
            saveMessage(MsgText, Msgid);
        })
    });

    // $("#create-post-media").change(function () {
    //     file = this.files[0];
    //     if (file) {
    //         let reader = new FileReader();
    //         reader.onload = function (event) {
    //             $("#imgPreview")
    //                 .attr("src", event.target.result);
    //         };
    //         reader.readAsDataURL(file);
    //     }
    // });

    $('#create-post-submit-btn').click(function (e) {
        e.preventDefault();
        savePostData();
    })
    $(document).on("click", ".select_user_to_msg", function (data) {
        var user_to_beload = ($(this).attr("data-userId"));
        global_reciver_id = user_to_beload;
        loadMessages(user_to_beload);
    });
    $(document).on("click", ".msg_send_btn", function () {
        var msg = $("#msg_text").val();
        var newMsg = '0'
        saveMessage(msg, newMsg);
    });
    setInterval(function () {
        console.log('1');
        loadMessages(global_reciver_id);
    }, 5000);
});

var PeopleData = '';

function fetchMessagePeopleList() {
    $.ajax({
        type: "POST",
        url: "fetchMessagePeopleList",
        data: {},
        dataType: "json",
        success: function (response) {
            PeopleData = '';
            $.each(response.data, function (index, obj) {
                fetchMessagePeopleDetailList(obj.people)
            })
            setTimeout(() => {
                bodybuilder()
            }, 2000);
        }
    });
}

function fetchMessagePeopleDetailList(userid) {
    $.ajax({
        type: "POST",
        url: "fetchMessagePeopleDetailList",
        data: {
            "userid": userid
        },
        dataType: "json",
        success: function (response) {
            $.each(response.data, function (index, obj) {
                if (obj.profile_pic == null || obj.profile_pic == ' ' || obj.profile_pic == '') {
                    var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
                }
                else {
                    var profile_photo = 'AlphaStorage/' + obj.profile_pic;
                }
                if (response.iam == obj.id) {
                    PeopleData += `<div class="chat_list active_chat select_user_to_msg"  data-userId=` + obj.id + `>
                    <div class="chat_people">
                        <div class="chat_img"> <img src=`+ profile_photo + ` alt="me"> </div>
                        <div class="chat_ib">
                            <h5>ME <span class="chat_date"></span></h5>
                            <p>Private Space</p>
                        </div>
                    </div>
                </div> `;
                }
                else {
                    PeopleData += ` 
                            <div class="chat_list select_user_to_msg"  data-userId=`+ obj.id + ` >
                                <div class="chat_people "  data-userId=`+ obj.id + `>
                                    <div class="chat_img "  data-userId=`+ obj.id + `> <img src=` + profile_photo + ` alt=` + obj.name + `> </div>
                                    <div class="chat_ib">
                                        <h5 data-userId=`+ obj.id + `>` + obj.name + `<span class="chat_date">Dec 25</span></h5>
                                        <p>message</p>
                                    </div>
                                </div>
                            </div>`
                }
            })
        }
    });
}

function loadMessages(user_id) {

    let messageContentData = '';
    let time = '';

    $.ajax({
        type: "POST",
        url: "fetchMessages",
        data: {
            "user_id": user_id
        },
        dataType: "json",
        success: function (response) {
            $.each(response.data, function (index, obj) {
                if (obj.profile_pic == null || obj.profile_pic == ' ' || obj.profile_pic == '') {
                    var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
                }
                else {
                    var profile_photo = 'AlphaStorage/' + obj.profile_pic;
                }
                if (obj.updated_at == null || obj.updated_at == ' ' || obj.updated_at == '') {
                    time = obj.created_at;
                }
                else {
                    time = `Edited ` + obj.updated_at;
                }

                if (obj.sender_user_id != response.iam) {
                    messageContentData += ` <div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src=`+ profile_photo + ` alt="sunil"> </div>
                        <div class="received_msg">
                            <div class="received_withd_msg">
                                <p>`+ obj.msg_text + `</p>
                                <span class="time_date">`+ time + `</span>
                            </div>
                        </div>
                    </div>`
                }
                else {
                    var regex = / /ig;
                    var str_rplc_for_data_atrribute = obj.msg_text.replaceAll(regex, '~')
                    messageContentData += `
                    <div class="outgoing_msg">
                        <div class="sent_msg">
                            <p>`+ obj.msg_text + `</p>
                            <span class="time_date">`+ time + `</span>
                            <button class="edit_message" data-id=`+ obj.id + ` data-msg=` + str_rplc_for_data_atrribute + ` > <i class="fa fa-edit" ></i></button>
                        </div>
                    </div>
                `;
                }
            });
            $(".msg_history").html(messageContentData);
            $(".msg_history").animate({ scrollTop: 20000000 }, "slow");
            $(".type_msg").show();


        }
    });

}


function bodybuilder() {
    $(".inbox_chat").html(PeopleData);
}

function saveMessage(text, msgId) {
    $.ajax({
        type: "POST",
        url: "sendMessage",
        data: {
            "msg_data": text,
            "receiver": global_reciver_id,
            "msg_id": msgId
        },
        dataType: "json",
        success: function (response) {
            console.log(response);
            $('#msg_text').val(' ');
            $('#edit_msg').val(' ');
            $('#modal_edit_message').modal('hide');
            loadMessages(global_reciver_id);


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




