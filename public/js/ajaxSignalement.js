$(document).ready(function() {

    $('.signalCommentaire').on('click', function(event) {
        event.preventDefault();
        var idCommentaire = $(this).attr('data-id');
    
            $("#divFormSignal").fadeIn(1000);
            $('#idCom').attr('value', idCommentaire);
    
            $('.radioSignal').change(function() {
    
                var radio = $('.radioSignal:checked').val();
        
                if(radio == 'Autre raisons') {
                    $('#textAutreRaison').css('opacity', '1');
                } else if (radio !== 'Autre raisons') {
                    $('#textAutreRaison').css('opacity', '0');
                }
    
            });
    });

    





});