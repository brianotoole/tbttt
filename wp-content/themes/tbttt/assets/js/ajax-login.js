jQuery(document).ready(function($) {

    // Perform AJAX login on form submit for Header link
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
                if (data.message == 'Wrong username or password.'){
                  //console.log('error');
                  $('#form-member-login p.status').html('<span class="error">' + data.message + '</span>');
                } else {
	              $('#form-member-login p.status').html('<span class="success">' + data.message + '</span>'); 
                }
                //$('#form-member-login p.status').text(data.message);
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                }
            }
        });
        e.preventDefault();
    });
    
    // Perform AJAX login on form submit for Force Login Form
    $('#form-force-login').on('submit', function(e){
        $('#form-force-login p.status').show().text(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('#form-force-login #username').val(), 
                'password': $('#form-force-login #password').val(), 
                'security': $('#form-force-login #security').val() },
            success: function(data){
                if (data.message == 'Wrong username or password.'){
                  //console.log('error');
                  $('#form-force-login p.status').html('<span class="error">' + data.message + '</span>');
                } else {
	              $('#form-force-login p.status').html('<span class="success">' + data.message + '</span>'); 
                }
                //$('#form-member-login p.status').text(data.message);
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                }
            }
        });
        e.preventDefault();
    });

});