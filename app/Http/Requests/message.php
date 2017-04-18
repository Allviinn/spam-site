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
        
        'numero.required'=>"Ce champ est obligatoire",   
        'numero.regex'=>"Format de téléphone invalide",   
            
        'email.required'=>"Ce champ est obligatoire",  
        'email.email'=>"Email non valide",
            
        'commentaire.required'=>"Ce champ est obligatoire",
        'commentaire.max'=>"Maximum 500 caractères",
            
        'pseudo.required'=>"Ce champ est obligatoire",
        'type.required'=>"Ce champ est obligatoire",
            
          
   
        ];
    }
}
