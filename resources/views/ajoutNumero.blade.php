<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    
    <link href="{{ URL::to('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
    
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    

    </head>
    <body>
        
       
        <header ></header>	
       
	
        <h1 id="h1">Déclarer un numéro</h1>
        
        <div id="form">
        <form action="traitement" method="post">

           <input class="input  " type="text" name="numero" id="numero" placeholder=" Ex : 0931235860"><br><br>
            {!! $errors->first('numero', '<small class="help-block">:message</small>') !!}<br>
           
            <input type="text" placeholder=" Votre pseudo" name="pseudo" id="pseudo"class="input" ><br><br>
              {!! $errors->first('pseudo', '<small class="help-block">:message</small>') !!}<br>
            
             <input type="text" placeholder=" Votre email (exemple@gmaol.com) " name="email" id="email"class="input" ><br><br>
              {!! $errors->first('email', '<small class="help-block">:message</small>') !!}<br>
            
            
          
          <input type="radio" name="type" value="Sms" class="message_pri"> Sms &nbsp;&nbsp;
          <input type="radio" name="type" value="Appel" class="message_pri"> Appel<br><br>
          {!! $errors->first('type', '<small class="help-block">:message</small>') !!}<br>
            
           
           <textarea cols="50" rows="6" name=" commentaire" id="commentaire" class="input" placeholder=" Votre commentaire" ></textarea><br><br>
            {!! $errors->first('commentaire', '<small class="help-block">:message</small>') !!}<br>
            
           
          

            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}"><br>
            <input class ="bouton" type="submit" id="submit" value="Valider">

        </form>
        
    
        
        </div>

<!--
        <a href="test">Lien de test vers une autre page</a>
        <script type="text/javascript" src="{{ URL::to('js/welcome.js') }}"></script>
-->
    </body>
</html>
