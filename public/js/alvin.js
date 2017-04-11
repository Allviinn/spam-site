$(document).ready(function() {



	$('#lienRechercheNum').on('click', function(e) {
		e.preventDefault();

			$("#modal").show().animate({opacity:1}, 50);
    });

    $('#croix').on('click', function() {

    	$("#modal").hide('slow').animate({opacity:0});
    });



    $('#submitRechercheNum').on('click', function(event) {

    	var input = $('#numeroRecherche').val();
    	var longueur = input.length;

			if($.isNumeric(input) == false) {
    		event.preventDefault();
    		$('#retourUtil').text('Entrez un nombre');
    	}

    	if(input.length < 5) {
    		event.preventDefault();
    		$('#retourUtil').text('5 caractères minimum');
    	}

    	if(input.length > 20) {
    		event.preventDefault();
    		$('#retourUtil').text('20 caractères maximum');
    	}

    	if(input.length == 0) {
    		event.preventDefault();
    		$('#retourUtil').text('Champ vide');
    	}

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


	});


    $('.seeComents').on('click', function(e) {

        e.preventDefault();

        var numero = $(this).attr('data-numero');

         $.ajax({
                type:'POST',
                 url:'numAccueil',
                 data: {
                    "_token": $('#token1').attr('value'),//ajax, envoi de donnée de la recherche par ville
                    "numero": numero
                    },
                 success:function(data){
                    console.log(data);
                    for (var k = 0; k < data.auteursA.length ; k++) {
                        $('.commentairesAccueil').append('<div class="row"><p class="col-12 pseudoCommentaires">'+ data.auteursA[k].pseudo +' :</p><br><p class="col-12 descCommentaires">'+ data.auteursA[k].commentaire +' </p><a href="#" class="offset-7 col-5 offset-md-8 col-md-4 offset-lg-9 col-lg-3">Signaler ce commentaire</a></div>');
                    $('.commentairesAccueil').animate({"height": "400px", "padding": "15px"});
                    }
                }
            });
 

    });


});
