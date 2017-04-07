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
            
            'numero' => 'required|numeric|max:20|min:5',
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
        'numero.numeric'=>"Ce champ doit Être un numéro",   
        'numero.max'=>"Maximum 20 caractères",  
        'numero.min'=>"Minimum 5 caractères", 
            
        'email.required'=>"Ce champ est obligatoire",  
        'email.email'=>"Email non valide",
            
        'commentaire.required'=>"Ce champ est obligatoire",
        'commentaire.max'=>"Maximum 500 caractères",
            
        'pseudo.required'=>"Ce champ est obligatoire",
        'type.required'=>"Ce champ est obligatoire",
            
          
   
        ];
    }
}
