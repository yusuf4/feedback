<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
           'name'=> 'required|max:100',
            'phone'=> 'required|numeric',
            'text'=>'required'
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Name is required!',
            'phone.numeric'=>'Phone will not be letter',
            'text.required'=>'Text is required'
        ];
    }
}
