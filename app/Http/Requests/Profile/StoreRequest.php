<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'first_name'=>'required|string',
           'secind_name'=>'nullable|string',
           'third_name'=>'nullable|string',
           'phone'=>'required|string',
           'status'=>'required|integer',
           'age'=>'required|integer',
        ];
    }
}










