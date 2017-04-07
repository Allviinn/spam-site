$(document).ready(function() {



	$('#lienRechercheNum').on('click', function(e) {
		e.preventDefault();

			$("#modal").css({ "opacity":"0","display":"block"}).show().animate({opacity:1});
            
       
	
	});

	var largeur = $(window).width();
	
		if(largeur < 576) {
			$('#sectionAccueil img').attr('src' , 'graphisme/graphismes/images/fond-accueil-mobile2.png');
		} else {
			$('#sectionAccueil img').attr('src' , 'graphisme/graphismes/images/fond-accueil2.png');
		}

	$(window).resize(function() {

		var largeur = $(window).width();
	
		if(largeur < 576) {
			$('#sectionAccueil img').attr('src' , 'graphisme/graphismes/images/fond-accueil-mobile2.png');
		} else {
			$('#sectionAccueil img').attr('src' , 'graphisme/graphismes/images/fond-accueil2.png');
		}


	})


});
