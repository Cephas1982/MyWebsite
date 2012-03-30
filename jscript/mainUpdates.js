//this will show updates once php is done
var showUpdates = function(response){
					$("#updatesContent").html(response);
					};

//AJAX - will add in updates when the button is clicked	
$(document).ready(function(){
	$("#updateButton").click(function(){
		if(typeof counter == 'undefined')
			counter = 2;
		
		counter+= 2;
		var dataString = 'count=' + counter;

		$("#updatesContent").load("/php/retrieveUpdates.php", dataString, showUpdates);
	});

return false;
});
	
	





	
/********************** OLD WAY
function addUpdates(){
		var xmlhttp;
		//var counter;
		
		if(typeof counter == 'undefined')
			counter = 2;
		
		counter+= 2;

		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200){
		    document.getElementById("updatesContent").innerHTML=xmlhttp.responseText;
		  }
		}
		xmlhttp.open("GET","php/ajaxTest.php?count=" + counter,true);
		xmlhttp.send();
	}
*/
