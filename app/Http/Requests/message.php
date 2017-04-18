<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class message extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'numero' =>array ('required',
            'regex:/[0-9]{5,20}$/'),
            
            'prefix' =>array ('required',
            'regex:/\+[0-9]{2}$/'),
            
            'email' => 'required|email|max:255',
            'commentaire' => 'required|max:255',
            'type' => 'required',
            'pseudo' => 'required',
            
         
        ];
    }
    
    
    public function messages()
    {
        return [
        
        'numero.required'=>"Entrez un numéro de téléphone",   
        'prefix.required'=>"Entrez un préfixe",   
        'numero.regex'=>"Format de téléphone invalide",   
        'prefix.regex'=>"Votre préfixe doit se composer d'un '+' suivi de 2 chiffres",   
            
        'email.required'=>"Entrez votre email",  
        'email.email'=>"Adresse email non valide",
            
        'commentaire.required'=>"Insérez votre commentaire",
        'commentaire.max'=>"Maximum 500 caractères",
            
        'pseudo.required'=>"Choisissez un pseudo",
        'type.required'=>"Ce champ est obligatoire",
            
          
   
        ];
    }
}
