$(document).ready(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	//
	$('#register-submit').click(function (arg) {
		
	var username = 	document.getElementById('register-form').username.value;
	var email 	 = 	document.getElementById('register-form').email.value;
	var password = 	document.getElementById('register-form').password.value;
	var confirm_password = 	document.getElementById('register-form').confirm.value;

	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if(password.length < 8)
		document.getElementById('err-msg-register').innerHTML='* Password should be min 8 characters';
	

	if(password.localeCompare(confirm_password) != 0)
		document.getElementById('err-msg-register').innerHTML='* Passwords did not match!!';
	
		
	if(re.test(email) == false)
		document.getElementById('err-msg-register').innerHTML='* Invalid email.';

	else{

		var errmsg="";
		$.ajax({
			type: "POST",
			url: "register.php",
			dataType: "JSON",
			data: {
				uname: username,
				email: email,
				password: password
			},
			success: function(msg){
				
				var jsondata = JSON.stringify(msg);
				alert(jsondata);

				if(msg.error){

					if(msg.flag == 'insertion failed'){
						errmsg = "* Oops something went wrong on the server side. Try agian later.";
					}

					if (msg.flag == 'multiple users') {
						errmsg = "* Unique email and username required. Try again";
					}

					document.getElementById('err-msg-register').innerHTML = errmsg;

				}else{
					window.location.href = "chatindex.php?uname="+username;
				}

			}
		});

	}
	arg.preventDefault();
	});
	//
	$('#login-submit').click(function (arg){

		var username = 	document.getElementById('login-form').username.value;
		var password 	 = 	document.getElementById('login-form').password.value;

		var errmsg="";
		$.ajax({

			type: "POST",
			url: "login.php",
			dataType: "JSON",
			data: {
				uname: username,
				password: password
			},
			success: function(msg){

				if(msg.error){
					errmsg="* Something seems wrong. Please check the credentials.";
					document.getElementById('err-msg-login').innerHTML = errmsg;

				}else{
					window.location.href = "chatindex.php?uname="+username;
				}
			}

		});
	arg.preventDefault();
	});
});

