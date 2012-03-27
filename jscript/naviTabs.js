$(document).ready(function(){  
    $("#navitabs").click(function(e){  
        switch(e.target.id){  
            case "homeTab":  
            
            	//Main / updates
            	$("#homeTab").removeClass("navitab");
            	$("#homeTab").addClass("activenavitab");                	
				$("#updatesContent").fadeIn();
                $("#updateButton").fadeIn();
                
                //my projects
            	$("#projectsTab").removeClass("activenavitab");
            	$("#projectsTab").addClass("navitab");                    
                $("#projectsContent").hide();
                
                //About me
				$("#aboutMeTab").removeClass("activenavitab");
				$("#aboutMeTab").addClass("navitab");	                
				$("#aboutMeContent").hide();
	

            break;  
            case "projectsTab":  
            
            	//Main / updates
            	$("#homeTab").removeClass("activenavitab");
            	$("#homeTab").addClass("navitab");
				$("#updatesContent").hide();
                $("#updateButton").hide();
                
                
                //my projects
            	$("#projectsTab").removeClass("navitab");
            	$("#projectsTab").addClass("activenavitab");         
                $("#projectsContent").fadeIn();
                
				
				//about me                
				$("#aboutMeTab").removeClass("activenavitab");
				$("#aboutMeTab").addClass("navitab");								
				$("#aboutMeContent").hide();

            break;  
            case "aboutMeTab":  

                //Main / updates
            	$("#homeTab").removeClass("activenavitab");
            	$("#homeTab").addClass("navitab");                
  				$("#updatesContent").hide();              	
                $("#updateButton").hide();
                
                //My projects
            	$("#projectsTab").removeClass("activenavitab");
            	$("#projectsTab").addClass("navitab");                  
                $("#projectsContent").hide();
                
                //About me
				$("#aboutMeTab").removeClass("navitab");
				$("#aboutMeTab").addClass("activenavitab");	                
				$("#aboutMeContent").fadeIn();                	

            break;  
        }  
        //alert(e.target.id);  //testing
        return false;  
    });  
});  