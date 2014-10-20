$(document).ready(function () {

	$("#menu-test > li").each(function () {
		console.log($(this).attr('href'))
		if($(this).children().attr('href') == undefined) {
			$(this).children().addClass("pointer")
			$(this).click(function () {
				$( this ).children().toggleClass( "visible" );
            });
		}
	});

if ($("#header-description").height() > $("#header-img").height() ) {
	$("#header-img").height($("#header-description").height());
}
	
});