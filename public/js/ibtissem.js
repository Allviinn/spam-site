$(document).ready(function() {
    $('#email').on('change', function(e) {
        
        var val =$('#email').val();
        //console.log(val);
            
        $.ajax({
            method: "POST",
            url: 'pseudoExiste',
            data: {
    
                "_token": $('#token').attr('value'),
                'valeurChamps': val
            
            }, 
            success: function(msg) {
                            //console.log(msg.pseudoExiste.pseudo);
                if(msg.pseudoExiste !== null){
        
                   
                    $('#pseudo').attr('value',msg.pseudoExiste.pseudo);
                    $('#pseudo').attr('readonly','readonly');
                }
    
            }
        });
        
        
    });
    
    
    
    $('#prefix').on('change paste keyup', function() {
        
        var prefixe = $(this).val().length;
    //    console.log(prefixe);
    //    
    //    var num = $("#prefix").val().substr(0, 3);
    //    
        if ( prefixe >= 3) {
            $("#numero").focus();
    //        $("#prefix").val(num);
        }
        
    });




        //$('#form form').on('click', '.recaptcha-checkbox-checkmark', function() {
        //   $('#submit').css('display', 'block');
        //});

        //var tok = $('#g-recaptcha-response').val();
        //console.log(tok);
        //if(tok == null) {
//
        //} else {
        //    $('#submit').css('display', 'block');
        //}
    


    

});









