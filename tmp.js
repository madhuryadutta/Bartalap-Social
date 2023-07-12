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
 console.log(cover_photo);
 $("#profile_pic").attr("src", profile_photo);
 if (response != undefined) {
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