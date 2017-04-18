$(document).ready(function() {


// Au clique sur rechercher un numéro, on fait apparaître le mini-formulaire de recherche d'un numéro 
//(page d'accueil)
	$('#lienRechercheNum').on('click', function(e) {
		e.preventDefault();

			$("#modal").show().animate({opacity:1}, 50);
      $('#modal').css('z-index', '5')
    });

    $('#croix').on('click', function(e) { //on ferme ce même formulaire en cliquant sur la croix
      e.preventDefault();
      $("#modal").hide('slow').animate({opacity:0});
    });
//-------------------------------------------------------------------


//mini-formulaire de recheche d'un numéro : vérificatiion de la longueur du champ et on s'assure que c'est un numéro
//page d'accueil
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
//-----------------------------------------------------------------------------

//page d'accueil : on cache l'image en petite taille d'écran, on l'affiche dans les grandes tailles
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
//---------------------------------------------------------------------------------------------


//page d'accueil : au clique sur "voir les commentaires" une requête ajax va récupérer dans la BDD les 
//commentaires associés au numéro cliqué
    $('.seeComents').on('click', function(e) {

        e.preventDefault();
        var celuiLa = $(this);
        var numero = $(this).attr('data-numero');
        var a = $(this).siblings('a');
        //var divCom = $(this).parent().siblings('div');
        var divCom = $(this).parent().parent().siblings('div');
        
        $.ajax({
                type:'POST',
                url:'numAccueil',
                data: {
                   "_token": $('#token1').attr('value'),
                   "numero": numero
                   },
                success:function(data){
                      var h = (data.auteursA.length);
                      var hauteur = h*500;
                   for (var k = 0; k < data.auteursA.length ; k++) {
                       
                   
                      divCom.append('<div style="border-bottom: 1px solid grey;" class="divComentaire"><p class="col-12 pseudoCommentaires" style="font-weight: bold">'+ data.auteursA[k].pseudo +' :</p><p class="col-12 descCommentaires">'+ data.auteursA[k].commentaire +'</p><a href="#" class="col-3 offset-md-8 col-md-4 offset-lg-9 col-lg-3 signalCom" data-id="' + data.auteursA[k].id + '" style="color: #c6002b;">Commentaire abusif ?</a></div>');
                      a.css('display','block');
                      celuiLa.css('display','none');
                      divCom.css({ 'max-height': hauteur, 'height' :'auto'});
                      $('.divComentaire').css({'padding': '15px', 'box-sizing':'border-box'});
                    }
                }
        });
    });
                                //on cache les commentaires que l'on vien d'afficher
                                $('.hideComments').on('click', function(event) {
                                    
                                    var celuiLa = $(this);
                                    var a = $(this).siblings('a');
                                    var divCom= $(this).parent().parent().siblings('div');
                            
                                    event.preventDefault();
                                    celuiLa.css('display','none');
                                    a.css('display','block');
                                    divCom.empty();
                                    divCom.css({"max-height": "0px"});
                                                  
                                }); 
//------------------------------------------------------------------------------------------


//au clique sur 'commentaire abusif' sur la page d'accueil, on fait apparître le formulaire de signalement d'un 
//commentaire
    $('.commentairesAccueil').on('click', '.signalCom', function(e) {

        e.preventDefault(e);
        var idCommentaire = $(this).attr('data-id');

        $('#idCom').attr('value', idCommentaire);

        $("#modalForm").show().animate({opacity:1}, 50);
        $("#divFormSignal").css('z-index', '6');


            //dans ce formulaire on affiche le text area si "autres raison" est coché, sinon on cache le textarea
            $('.radioSignal').change(function() {
    
                var radio = $('.radioSignal:checked').val();
        
                if(radio == 'Autre raisons') {
                  $('#textAutreRaison').css({'opacity': '1'});
                    $('#textAutreRaison').animate({'height': '100px'});
                } else if (radio !== 'Autre raisons') {
                  $('#textAutreRaison').css({'opacity': '0'});
                    $('#textAutreRaison').animate({'height': '0px'});
                }
    
            });
            //----

    });

    //on cache le formulaire au clique sur la croix
    $('#croixSignal').on('click', function(e) {
      e.preventDefault();
        $("#modalForm").hide('slow').animate({opacity:0});
    });

//--------------------------------------------------------------------------------

    



});
