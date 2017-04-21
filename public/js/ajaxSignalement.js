$(document).ready(function() {

    $('.signalCommentaire').on('click', function(e) {
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

    $('#signaler').on('click', function(event){

        event.preventDefault();

        var textAutreRaison = $('#textAutreRaison').val();
        var raisonSignal = $('.radioSignal:checked').val();
        var tokenRecherche = $('#tokenRecherche').attr('value');
        var idCom = $('#idCom').attr('value');

        $.ajax({
                type:'POST',
                url:'signalCommentaireRecherche',
                data: {
                   "_token": tokenRecherche,
                   "textAutreRaison": textAutreRaison,
                   "raisonSignal": raisonSignal,
                   "idCom": idCom
                   },
                success:function(data){
                    console.log(data)
                     $('#reponseSignal').css('display', 'block');
                      
                      setTimeout(function(){ 

                          $('#reponseSignal').css('display', 'none'); 
                           $("#modalForm").hide('slow').animate({opacity:0});
                            $('.radioSignal').prop('checked', false);
                            $('#textAutreRaison').val('');
                        }, 3000);
                }
        });



    });

    //on cache le formulaire au clique sur la croix
    $('#croixSignal').on('click', function(e) {
      e.preventDefault();
        $("#modalForm").hide('slow').animate({opacity:0});
    });

 
    





});