$(document).ready(function() {
	$('form').on('submit',function(e) {
		e.preventDefault();
		var email = $('#inputEmail');
		var password = $('#inputPassword');

		$.ajax({
			url: "login.php",
			type: 'POST',
			dataType: 'html',
			data: { email: email.val(), password: password.val() },
			beforeSend: function() {

				email.prop( "disabled", true );
				password.prop( "disabled", true );
			},
			success: function(data) {
                var json = eval('(' + data + ')');
                var status = json['status'];
               
                if (status=='success'){
                
                setTimeout(function() {
                    window.location.replace('welcome.php');
                    },2000);
                } else {
                    email.removeAttr("disabled");
                    password.removeAttr("disabled");
                    $('button').text("Please try again!");
                }
                
             },

            error: function(e){
            	console.log(e);
            	email.removeAttr( "disabled");
                password.removeAttr( "disabled");
                alert("Try again.");
                
            }
			

		});
	});
});