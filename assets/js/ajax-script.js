jQuery(document).ready(function ($) {
    var ajaxurl = my_ajax_object.ajaxurl;

    function loadFaqPosts() {
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'load_faq_posts',
            },
            success: function (response) {
							$('#faq-lists').html(response); 
							  $(function () {
                                  $('#faq-lists').accordion({
                                      collapsible: true,
                                  });
                              });
            },
            error: function (error) {
                console.log(error);
            },
        });
    }

    $('#show-faq-btn').on('click', function () {
        loadFaqPosts();
    });
});



