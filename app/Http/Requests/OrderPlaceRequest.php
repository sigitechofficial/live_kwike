<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class OrderPlaceRequest extends FormRequest
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
            'user_address_id'=>'required',
            'schedule_date'=>'required',
            'order_type'=>'required',
            'payment_method'  =>  'required',
            'card_type'     =>  'required',
            'card_number'   =>  'nullable',
            'exp_month'     =>  'nullable',
            'exp_year'      =>  'nullable',
            'cvc'           =>  'nullable',
            'pm_id'         =>  'nullable',
            'card_save'     =>  'nullable'
        ];
    }
    public function failedValidation(Validator $validator)
    {
        $errors = $validator->messages()->all();
        errorResponse('0','Validation error.!',$errors,200);
    }
}
