<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\spam_numeros;
use App\spam_commentaires;
use App\spam_auteurs;

class morgane extends Controller
{
  public function rechercheNumero(Request $request)
  {
    $numero = new spam_numeros;
    $numRecherche = $request->input('numeroRecherche');

    if(!empty($numRecherche) && is_numeric($numRecherche) &&  strlen($numRecherche) > 5 && strlen($numRecherche) < 20)
    {
      $numeros = $numero::select('*')
          ->where('numero', $numRecherche)
          ->get();

      if (count($numeros) >= 1)
      {
        $numerosId = $numero::select('*')
          ->where('numero', '=', $numRecherche)
          ->first();
        $idNumero = $numerosId->id;

        $commentaire = new spam_commentaires;
        $commentaires = $commentaire::
        join('spam_numeros','spam_commentaires.id_spam_numeros','=','spam_numeros.id')
        ->join('spam_auteurs','spam_commentaires.id_spam_auteurs','=','spam_auteurs.id')
        ->select('spam_commentaires.*','spam_auteurs.pseudo AS pseudoAuteur')
        ->where('spam_commentaires.id_spam_numeros',$idNumero)
        ->get();

        // dd($commentaires);
        return view('recherche', array("numeros"=>$numeros, "commentaires"=>$commentaires));
      }
      else
      {
        return view('recherche', array("numeros"=>$numeros));
      }
    }
  }
}
