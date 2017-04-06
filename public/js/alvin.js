$(document).ready(function() {



	$('#lienRechercheNum').on('click', function(e) {
		e.preventDefault();
		
			//$('#formRechercheNum').css({ "display": "block"});
			//$('#formRechercheNum').css({ "opacity": "1"});
//
			//$('#formRechercheNum').animate(quoi,durée,function() {
//
			//})

			$("#formRechercheNum").css({ "opacity":"0","display":"block"}).show().animate({opacity:1})
	
	});


});
