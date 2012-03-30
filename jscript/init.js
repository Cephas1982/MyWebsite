var popupStatus = 0;

//preps elements
$(document).ready(function(){
	$("#mainContent").show();
	$("#projectsContent").hide();
	$("#aboutMeContent").hide();
	$("#loginForm_div").hide();
	$("#login_success_div").hide();
	});
	
//centers any popup
function centerPopup(){
	var windowWidth = document.documentElement.clientWidth;  
	var windowHeight = document.documentElement.clientHeight;  
	var popupHeight = $("#loginForm_div").height();  
	var popupWidth = $("#loginForm_div").width();  
	//centering  
	$("#loginForm_div").css({  
	"position": "absolute",  
	"top": windowHeight/2-popupHeight/2,  
	"left": windowWidth/2-popupWidth/2 
	});
		
}

//loading popup with jQuery magic!  
function loadPopup(){  
	//loads popup only if it is disabled  
	if(popupStatus==0){  
		$("#backgroundPopup").css({"opacity": "0.9"});  
		$("#loginForm_div").fadeIn("slow");  
		$("#backgroundPopup").fadeIn("slow");  
		popupStatus = 1;  

	}  
}  

//onclick for login
$(document).ready(function(){
	$("#loginTab").click(function(){
		centerPopup();
		loadPopup();

	});
	
		$("#backgroundPopup").click(function(){
			if(popupStatus = 1){
				$("#loginForm_div").fadeOut("slow");  
				$("#backgroundPopup").fadeOut("slow");  
				popupStatus = 0;  
			}
		});
});


