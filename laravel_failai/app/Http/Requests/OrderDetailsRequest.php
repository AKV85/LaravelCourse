<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrderDetailsRequest extends FormRequest
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
            'order_id' => ['required', 'integer'],
            'product_name' => ['required', 'string'],
            'product_id' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'status_id' => ['required', 'integer']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [

        ];
    }
}
