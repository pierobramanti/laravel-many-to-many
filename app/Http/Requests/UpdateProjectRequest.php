<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    
     public function rules()
     {
         return [
             'title' => 'required|max:255',
             'description' => 'nullable|string',
             'date' => 'required|date',
             'type_id' => 'nullable|exists:types,id'
         ];
     }
 
     public function messages(){
         return[
             'title.required' => 'Il titolo è obbligatorio.',
             'title.max' => 'Il titolo non può superare i 255 caratteri.',
             
             'date.required' => 'La data è obbligatoria.',
             'date.date' => 'La data deve essere in un formato valido.',

             'type_id.exists' => 'Il tipo di progetto selezionato non è valido.' 
             
         ];
    }
}
