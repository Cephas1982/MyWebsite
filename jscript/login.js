//Login Scripts
function processLogin(result){
	$("#loginForm_div").html("<br /><br /><br />THANK YOU!").css("text-align", "center").delay(600).fadeOut('slow', function(){
		$("#backgroundPopup").fadeOut('fast', function(){
			$("#loginTab").html("Logged in as: " + result);	
		});//callback		
	});	
}

//Process the login form
$(document).ready(function(){
	$("#loginButton").click(function(){
		//TODO: do stuff to validate
		var loginForm = $("#loginForm");
		
		//ajax request 
		$.ajax({
			url: "../php/processLogin.php",
			type: "POST",
			data: loginForm.serialize(),
			success: processLogin
		});	
		return false;//don't refresh page
	});
});


