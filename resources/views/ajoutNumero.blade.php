<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    
    <link href="{{ URL::to('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
    
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    

    </head>
    <body>
        
       
        <header>
          <div class="container-fluid">
                <div class="row">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"><a href="/"><img src="graphisme/graphismes/images/icone-logo.png" width="50"></a></div>
                    <div id="headerDiv2" class="offset-5 col-5 offset-sm-7 col-sm-4 offset-md-8 col-md-3 offset-lg-8 col-lg-2 offset-xl-7 col-xl-3"><a href="#">UN SPAM ?</a></div>
                        
                </div>
            </div>

        </header>	
       
	
        <h1 id="h1">Déclarer un numéro</h1>
        
        <div id="form">
        <form action="traitement" method="post">
           
  
           <input class="input  " type="text" name="numero" id="numero" placeholder=" Ex : +33623586092"><br>
            {!! $errors->first('numero', '<small class="help-block">:message</small>') !!}<br>
           
            <input type="text" placeholder=" Votre pseudo" name="pseudo" id="pseudo"class="input" ><br>
              {!! $errors->first('pseudo', '<small class="help-block">:message</small>') !!}<br>
            
             <input type="text" placeholder=" Votre email (exemple@gmaol.com) " name="email" id="email"class="input" ><br>
              {!! $errors->first('email', '<small class="help-block">:message</small>') !!}<br>
            
            
          
          <input type="radio" name="type" value="Sms" class="message_pri"> Sms &nbsp;&nbsp;
          <input type="radio" name="type" value="Appel" class="message_pri"> Appel<br>
          {!! $errors->first('type', '<small class="help-block">:message</small>') !!}<br>
            
           
           <textarea cols="50" rows="6" name=" commentaire" id="commentaire" class="input" placeholder=" Votre commentaire" ></textarea><br>
            {!! $errors->first('commentaire', '<small class="help-block">:message</small>') !!}<br><br>
            
           
          

            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
            <input class ="bouton" type="submit" id="submit" value="Valider">

        </form>
        
    
        
        </div>

<!--
        <a href="test">Lien de test vers une autre page</a>
        <script type="text/javascript" src="{{ URL::to('js/welcome.js') }}"></script>
-->
    </body>
</html>
