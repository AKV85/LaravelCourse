<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'zip' => ['required', 'string'],
            'street' => ['required', 'string'],
            'house_number' => ['required', 'string'],
            'apartment_number' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'type' => ['required', 'string'],
//                , 'in_array:home,work,other'],
            'additional_info' => ['nullable', 'string', 'min:3'],
            'user_id' => ['required', 'exists:users,id'],
        ];
    }

//    /**
//     * Get the error messages for the defined validation rules.
//     *
//     * @return array
//     */
//    public function messages()
//    {
//        return [
//            'name.required' => 'Privalomas produkto pavadinimas',
//            'name.string' => 'Pavadinima turi sudaryti lotyniški simboliai',
//            'name.min' => 'Minimalus pavadinimo ilgis privalo būti :min simboliai',
//            'name.max' => 'Maximalus pavadinimo ilgis privalo būti :max simboliai',
//            // ....
//        ];
//    }
}
