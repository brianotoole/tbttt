jQuery(document).ready(function($) {

    // Perform AJAX login on form submit
    $('#form-member-login').on('submit', function(e){
        $('#form-member-login p.status').show().text(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('#form-member-login #username').val(), 
                'password': $('#form-member-login #password').val(), 
                'security': $('#form-member-login #security').val() },
            success: function(data){
                $('#form-member-login p.status').text(data.message);
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                    //window.location = document.location.href + '/members';
                    var location_nohash = window.location.hash.substring(1);
                    window.location = location_nohash + '/tbttt/members';
                }
            }
        });
        e.preventDefault();
    });

});