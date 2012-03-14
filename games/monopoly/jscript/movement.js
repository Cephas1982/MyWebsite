//Move player 1  TODO: send parameter to affect movement, send paramater to select which player is moving
$(document).ready(function() { 
    $("#boardView").click(function() { 
        $("#player1").animate({ 
			left: 500
        }, 1000).animate({ 
			top: 350
        }, 1000).animate({ 
			left: 0
        }, 1000).animate({ 
			top: 0
        }, 1000); 
    }); 
});
