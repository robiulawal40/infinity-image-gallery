(function($){



$('body').on('click', '#add_image_to_gallery', function(e) {

    e.preventDefault();

    var button = $(this)
      , custom_uploader = wp.media({
        title: 'Insert image',
        library: {
            // uploadedTo : wp.media.view.settings.post.id, // attach to the current post?
            type: 'image'
        },
        button: {
            text: 'Use this image'// button label text
        },
        multiple: 'add'
    }).on('select', function() {
        // it also has "open" and "close" events

        var attachmentsIds = custom_uploader.state().get('selection').map(function(attachment) {
            attachment.toJSON();
            return attachment.id;
        });
        // console.log("attachemnts Ids:", attachmentsIds);

        var attachment = custom_uploader.state().get('selection').first().toJSON();
        $('.spinner').addClass('is-active');
        $.ajax({
            type: "post",
            dataType: "json",
            url: wpig.ajax_url,
            data: {
                action: "wpig_attachment_to_gallery",
                attachment_id: attachmentsIds,
                post_id: wpig.post_id,
                nonce: wpig.nonce
            },
            success: function(response) {
                if (response.success) {
                    console.log("Ajax Res", response);
                    if(response.data.redirect_url){
                        window.location.replace(response.data.redirect_url);
                    }else{
                        location.reload();
                    }
                    $('.spinner').removeClass('is-active');

                } else {
                    $('.spinner').removeClass('is-active');
                    console.log("Fail", response);
                    // alert("lkfjdlj");
                }
            }
        });

        //console.log("Attachment Browser", attachment);
    }).open();

});


$('body').on('click', '.remove-button', function(e) {
    e.preventDefault();
    $('.spinner').addClass('is-active');
    var cAttachment = $(this).data('attachment');
    $.ajax({
        type: "post",
        dataType: "json",
        url: wpig.ajax_url,
        data: {
            action: "wpig_remove_attachment_to_gallery",
            attachment_id: [cAttachment],
            post_id: wpig.post_id,
            nonce: wpig.nonce
        },
        success: function(response) {
            if (response.success) {
                //console.log("Ajax Res", response);
                $('.spinner').removeClass('is-active');
                location.reload();

            } else {

                console.log("Fail", response);
                // alert("lkfjdlj");
            }
        }
    });
});

$('body').on('click', '.delete-button', function(e) {
    e.preventDefault();
    $('.spinner').addClass('is-active');
    var cAttachment = $(this).data('attachment');
    $.ajax({
        type: "post",
        dataType: "json",
        url: wpig.ajax_url,
        data: {
            action: "wpig_delete_attachment_to_gallery",
            attachment_id: [cAttachment],
            post_id: wpig.post_id,
            nonce: wpig.nonce
        },
        success: function(response) {
            if (response.success) {
                //console.log("Ajax Res", response);
                $('.spinner').removeClass('is-active');
                location.reload();

            } else {

                console.log("Fail", response);
                $('.spinner').removeClass('is-active');
                // alert("lkfjdlj");
            }
        }
    });
});

$("body").on("click", "#doaction, #doaction2", function(e){
    e.preventDefault();
    var bAction = $("#bulk-action-selector-top").val();
    // var id = this.id;
    if(this.id == 'doaction2'){
         bAction = $("#bulk-action-selector-bottom").val();
        //  console.log(this.id);
    }
    var selectedAttachments = [];
     $(".check-column input:checked").each(function(){
        selectedAttachments.push($(this).val());
    });
    var Action = "";
    if("remove" == bAction){
        Action= "wpig_remove_attachment_to_gallery";
    }else if("delete" == bAction){
        Action= "wpig_delete_attachment_to_gallery";
    }else{ return ;}
    $.ajax({
        type: "post",
        dataType: "json",
        url: wpig.ajax_url,
        data: {
            action: Action,
            attachment_id: selectedAttachments,
            post_id: wpig.post_id,
            nonce: wpig.nonce
        },
        success: function(response) {
            if (response.success) {
                //console.log("Ajax Res", response);
                $('.spinner').removeClass('is-active');
                location.reload();

            } else {

                console.log("Fail", response);
                $('.spinner').removeClass('is-active');
                // alert("lkfjdlj");
            }
        }
    });
    // console.log("bAction", bAction);
    // console.log("ids", selectedAttachments);
});

// Remove the list table from submission 
$('#post').submit(function(event) {

//  event.preventDefault(); 

//  console.log( $('.wpig_list_table input, .wpig_list_table select, .wpig_list_table textarea, .wpig_list_table checkbox, .wpig_list_table radio'));
 $(".wpig_list_table").attr("disabled", true);
 return true;
//  $('.wpig_list_table input, .wpig_list_table select, .wpig_list_table textarea, .wpig_list_table checkbox, .wpig_list_table radio').attr("readonly", "readonly");
//  $(this).unbind('submit').submit(); 
});

$('.color-field').wpColorPicker();

    $('select[name="style"]').on("change", function(e){
        if($(this).val() == 'style-2'){
            console.log("Style 2 selected");
            $('input[name="background_color"]').val("#efefef");
        }
    });
  

    $('select[name="style"]').on("change", function(e){
        if($(this).val() == 'style-3'){
            $('.show_style-3').show();
            $('.hide_style-3').hide();
        }else{
            $('.hide_style-3').show();
            $('.show_style-3').hide();
        }
    });
    $('select[name="style"]').trigger('change');

  })(jQuery)