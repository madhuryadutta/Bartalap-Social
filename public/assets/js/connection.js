$('document').ready(function () {
    fetchMyProfileData();
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
                $("#profile_photo_home").attr("src", profile_photo);
                $("#profile_pic_near_post").attr("src", profile_photo);
                if (response != undefined) {
                    $("#username_home_page").html('@' + response.data[0].username);
                    $("#name_home_page").html(response.data[0].name);
                }
            }
        });
    }
});