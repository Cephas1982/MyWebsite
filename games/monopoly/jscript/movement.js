//Move player 1  TODO: send parameter to affect movement, send paramater to select which player is moving
$(document).ready(function() { 
    $("#boardView").click(function() { 
        $("#player1").animate({ 
			left: 10
        }, 1000).animate({ 
			top: 10
        }, 1000).animate({ 
			left: 550
        }, 1000).animate({ 
			top: 450
        }, 1000); 
    }); 
});
