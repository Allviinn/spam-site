<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\message;


use App\spam_auteurs;
use App\spam_commentaires;
use App\spam_numeros;
use DB;



class validation extends Controller
{
    public function validation (message $request){
    
  
        
        $numero = $request->input('numero');
        $numeroSansZero = substr($numero,1,20);
		$type = $request->input('type');
		$qualite = $request->input('qualite');
		$commentaire = $request->input('commentaire');
		$email = $request->input('email');
		$pseudo = $request->input('pseudo');
		$prefix = $request->input('prefix');
		$prefixSansPlus = substr($prefix,1,2);
		$today = getdate();
		$date = date("d/m/Y");   
        
        
        $numeros = new spam_numeros;   
        $auteurs = new spam_auteurs;   
        $commentaires = new spam_commentaires; 
        
         
        $idAuteur = $auteurs::select('id')
            ->where('email', '=', $email)
            ->first();
        
        if(!isset($idAuteur->id)){
            
        $insertionAuteur =  $auteurs::insertGetId(
                ['pseudo' => $pseudo,'email' => $email]
         );    
        }else {
            $insertionAuteur = $idAuteur->id;
        }   
        
        $idnum = $numeros::select('id')
            ->where('numero', '=', $numero)
            ->first();
      
        
            
        if(!isset($idnum->id)){
            
            $insertionNmero =  $numeros::insertGetId(
                ['numero' => $numeroSansZero,
                 'prefix' =>$prefixSansPlus,
                 'type' =>$type,
                 'date_ajout' =>$date,
                 'id_spam_auteurs' =>$insertionAuteur
                
                ]
            ); 
        
            $insertioncommentaire = $commentaires::insert(
                ['commentaire' => $commentaire,
                 'date_commentaire' =>$date,
                 'id_spam_auteurs' =>$insertionAuteur,
                 'id_spam_numeros' =>$insertionNmero
                
                ]
            );         
     
        } else {
        
            $insertioncommentaire = $commentaires::insert(
                ['commentaire' => $commentaire,
                 'date_commentaire' =>$date,
                 'id_spam_auteurs' =>$insertionAuteur,
                 'id_spam_numeros' =>$idnum->id
                
                ]
            );             
        
        }

       
    }
    
    public function getCommentaire(){
        
        $numero = new spam_numeros; 
        $commentaires = new spam_commentaires; 
        
        $toutNumero = $numero::join("spam_commentaires","spam_numeros.id","=","spam_commentaires.id_spam_numeros")
                    ->select('spam_commentaires.id as id','spam_numeros.numero','spam_numeros.type','spam_numeros.prefix' ,DB::raw("count(spam_commentaires.id_spam_numeros) as count"))
                    ->groupBy('spam_numeros.id')
                    ->orderBy('count','DESC')
                    ->limit(10)
                        // ->toSql();
                    ->get();
   // dd($toutNumero);
   return view ('welcome',array('numeros'=>$toutNumero));

} 
    
    public function pseudo (request $request){
    
        if($request->ajax()){
            
        $email = $request->input('valeurChamps');
        $auteurs = new spam_auteurs; 
            
        $pseudoExiste = $auteurs::select('*')
            ->where('email', '=', $email)
            ->first();    
        
    return response()->json(array('pseudoExiste' => $pseudoExiste));    
    }    
        
        
    }
    
}
