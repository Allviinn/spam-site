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
        var celuiLa = $(this);
        var numero = $(this).attr('data-numero');
        var divCom = $(this).parent().siblings('div');

         $.ajax({
                type:'POST',
                 url:'numAccueil',
                 data: {
                    "_token": $('#token1').attr('value'),//ajax, envoi de donnée de la recherche par ville
                    "numero": numero
                    },
                 success:function(data){
                    //console.log(data);
                    for (var k = 0; k < data.auteursA.length ; k++) {
                    divCom.append('<p class="col-12 pseudoCommentaires">'+ data.auteursA[k].pseudo +' :</p><br><p class="col-6 descCommentaires">'+ data.auteursA[k].commentaire +'</p><a href="#" class=" col-6 offset-md-2 col-md-4 offset-lg-3 col-lg-3">Signaler ce commentaire</a>');
                    divCom.animate({"min-height": "200px", "padding": "15px"});
                    celuiLa.removeClass("seeComents");
                    celuiLa.addClass("hideComments");
                 

                    
                    }
                }
            });

                    
 

    });

$('.hideComments').on('click', function(event) {

                        event.preventDefault();

                        var celuiLaA = $(this);
                        var divComA = $(this).parent().siblings('div');

                        divComA.animate({"min-height": "50px", "height" :"0px", "padding": "0px"});
                        divComA.css('overflow', 'hidden');
                        celuiLaA.html('<a href="#" class="col-6 offset-md-1 col-md-5 seeComents">Afficher les commentaires</a><br>');
    });  




});
