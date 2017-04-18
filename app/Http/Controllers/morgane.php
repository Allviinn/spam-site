<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\spam_numeros;
use App\spam_commentaires;
use App\spam_auteurs;
use App\spam_prefixs;

class morgane extends Controller
{
  public function rechercheNumero(Request $request)
  {
    $numero = new spam_numeros;
    $numRecherche = $request->input('numeroRecherche');

    if(!empty($numRecherche) && is_numeric($numRecherche) &&  strlen($numRecherche) >= 5 && strlen($numRecherche) <= 20)
    {
      if($numRecherche[0] == '0')
      {
        $numBDD = substr($numRecherche,1,20);
      }
      else if ($numRecherche[0] == '+'){
        $numBDD = substr($numRecherche,3,20);
      }
      $numeros = $numero::select('*')
          ->where('numero', $numBDD)
          ->get();

      if (count($numeros) >= 1)
      {
        $numerosId = $numero::select('*')
          ->where('numero', '=', $numBDD)
          ->first();
        $idNumero = $numerosId->id;

        $commentaire = new spam_commentaires;
        $commentaires = $commentaire::
        join('spam_numeros','spam_commentaires.id_spam_numeros','=','spam_numeros.id')
        ->join('spam_auteurs','spam_commentaires.id_spam_auteurs','=','spam_auteurs.id')
        ->select('spam_commentaires.*','spam_numeros.prefix','spam_auteurs.pseudo AS pseudoAuteur')
        ->where('spam_commentaires.id_spam_numeros',$idNumero)
        ->get();

        $count = count($commentaires);

        $prefix = new spam_prefixs;
        $pays = $prefix::
        join('spam_numeros','spam_prefixs.code','=','spam_numeros.prefix')
        ->select('spam_prefixs.pays')
        ->where('spam_numeros.id',$idNumero)
        ->first();
        $paysNumero = $pays->pays;

        return view('recherche', array("numeros"=>$numeros, "commentaires"=>$commentaires, "count"=>$count, "pays" =>$paysNumero));
      }
      else
      {
      return view('recherche', array("numeros"=>$numeros));
      }
    }
  }
}
