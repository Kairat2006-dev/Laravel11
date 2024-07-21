<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name'=>'nullable|string',
            'secind_name'=>'nullable|string',
            'third_name'=>'nullable|string',
            'phone'=>'nullable|string',
            'status'=>'nullable|integer',
            'age'=>'nullable|integer',
        ];
    }
}
