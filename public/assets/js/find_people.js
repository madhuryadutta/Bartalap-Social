$('document').ready(function () {
    fetchPeopleData();

    $(document).on("click", ".request_btn", function (data) {
        var request_type = ($(this).attr("data-code"));
        var request_to_user = ($(this).attr("data-user"));
        console.log(request_type + ' ' + request_to_user);
        saveRequest(request_to_user, request_type);
    });

});


function fetchPeopleData() {
    $.ajax({
        type: "POST",
        url: "fetchpeopledata",
        data: {},
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
                $("#result_count").html('Search Results (' + response.data.length + ')');
                var people_result_data = '';
                $.each(response.data, function (index, obj) {
                    if (obj.profile_pic == null || response.data[0].profile_pic == ' ' || response.data[0].profile_pic == '') {
                        var profile_photo = 'https://bootdey.com/img/Content/avatar/avatar7.png'
                    }
                    else {
                        var profile_photo = 'AlphaStorage/' + obj.profile_pic
                    }
                    people_result_data += `<div class="col-md-6 m-b-2">
                    <div class="p-10 bg-white">
                        <div class="media media-xs overflow-visible">
                            <a class="media-left" href="javascript:;">
                                <img src="` + profile_photo + `" alt="" class="media-object img-circle">
                            </a>
                            <div class="media-body valign-middle">
                                <b class="text-inverse">`+ obj.name + `</b>
                            </div>
                            <div class="media-body valign-middle text-right overflow-visible">
                                <div class="btn-group dropdown">
                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="request_btn" data-user=`+ obj.id + ` data-code="REQ" >Request</a></li>
                                        <li><a  class="request_btn" data-user=`+ obj.id + ` data-code="BLCK">Block</a></li>
                                        <li><a class="request_btn" data-user=`+ obj.id + ` data-code="REPT">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> `
                });
                // hidden for now 
                // obj.id + 
                // hidden for now 
                // $("#username_home_page").html('@' + response.data[0].username);
                // $("#name_home_page").html(response.data[0].name);
                $("#people_result_data").html(people_result_data);
            }
        }
    });
}
function saveRequest(to_user, r_type) {
    $.ajax({
        type: "POST",
        url: "send_request",
        data: {
            "to_user": to_user,
            "r_type": r_type,
        },
        dataType: "json",
        success: function (response) {
            console.log(response);

        }
    });
}