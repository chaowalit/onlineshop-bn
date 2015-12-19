
$(function(){
    $("#btn_upload_profile_img").click(function(){
        if($("#profile_img").val() != ''){
            $.ajax({
                url:'profile_setting/uploads_img_profile',
                data: new FormData($("#upload_form")[0]),
                dataType: 'json',
                async: false,
                type: 'post',
                processData: false,
                contentType: false,
                success: function(response){
                    console.log(response);

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    //alert('An error occurred... Look at the console (F12 or Ctrl+Shift+I, Console tab) for more information!');
                    alert('status code: ' + jqXHR.status + ', ' + 'errorThrown: ' + errorThrown + ', ' + 'jqXHR.responseText: ' + jqXHR.responseText);
                    //$('#result').html('<p>status code: '+jqXHR.status+'</p><p>errorThrown: ' + errorThrown + '</p><p>jqXHR.responseText:</p><div>'+jqXHR.responseText + '</div>');
                    console.log('jqXHR:');
                    console.log(jqXHR);
                    console.log('textStatus:');
                    console.log(textStatus);
                    console.log('errorThrown:');
                    console.log(errorThrown);
                }
            });
        }else{
            alert('กรุณาเลือกรูปภาพก่อน');
        }
    });

});