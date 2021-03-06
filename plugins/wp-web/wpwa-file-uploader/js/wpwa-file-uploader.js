$jq =jQuery.noConflict();

$jq(document).ready(function(){
    $jq(".wpwa_multi_file").each(function(){

        var fieldId = $jq(this).attr("id");

        $jq(this).after("<div id='wpwa_upload_panel_"+ fieldId +"' ></div>");
        $jq("#wpwa_upload_panel_"+ fieldId).html("<input type='button' value='Add Files' class='wpwa_upload_btn' id='"+ fieldId +"' />");
        $jq("#wpwa_upload_panel_"+ fieldId).append("<div class='wpwa_preview_box' id='"+ fieldId +"_panel' ></div>");
        $jq(this).remove();
    });

    var org_media = wp.media.editor.send.attachment;
    $jq(".wpwa_upload_btn").click(function(){

        var uploadObject = $jq(this);

        wp.media.editor.send.attachment = function(props, attachment) {
            $jq(uploadObject).parent().find(".wpwa_preview_box").append(
                "<img class='wpwa_img_prev' style='with:75px;height:75px' src='"                                + attachment.url + "' />");

            $jq(uploadObject).parent().find(".wpwa_preview_box").append(
                "<input class='wpwa_img_prev_hidden' type='hidden' name='h_"
                                + $jq(uploadObject).attr("id") + "[]' value='"
                                + attachment.url +"' />");
        }

        wp.media.editor.open();
        return false;   
    });

    $jq(".add_media").click(function(){
        wp.media.editor.send.attachment = org_media;
    }); 
    
    $jq("body").on("drop", function(){
        wp.media.editor.send.attachment = org_media;
    }); 

    $jq("body").on("dblclick", ".wpwa_img_prev" , function() {

        $jq(this).next(".wpwa_img_prev_hidden").remove();
        $jq(this).remove();
    });

});
