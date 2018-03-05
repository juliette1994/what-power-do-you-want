function cursor(){
    $(".profil_click").hover(function(){
	$(".profil_click").css("cursor","pointer");
    });
};

function profil_menu(){
    $(".profil_click").click(function(){
	$(".visible").css("display", "block");
	$(".invisible_menu_header").css("display", "none");
	$(".inline_block_profil").css("width", "70%");

	$(".profil_click").click(function(){
	    $(".visible").css("display", "none");
	    $(".invisible_menu_header").css("display", "inline-block");
	    $(".inline_block_profil").css("width", "auto");
	    profil_menu();
	});
    });
};
    

