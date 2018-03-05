function	ajout_comments() {
    $("#submit").click(function() {
	    if ($("#comments").val()) {
		{
		    var	txt = $("#comments").val();
		    var	para = $("<p class=space></p>");
		    para.text(txt);
		    var color = $("<div id=color></div>");
		    var img = $("<img id=user class=img src=../img/user.png alt=user/>");
		    color.appendTo("#commentaire");
		    img.appendTo("#color");
		    para.appendTo("#color");
		}
	    }
	});
}