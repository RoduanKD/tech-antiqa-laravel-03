<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePorductRequest extends FormRequest
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
            'name'               => 'required|string|min:5|max:55',
            'price'              => 'required|numeric',
            'quantity'           => 'required|numeric:min:0,max:10',
            'language'           => 'required',
            'category_id'        => 'required|numeric|exists:categories,id',
            'description'        => 'required|string|min:10|max:255',
            // 'specification_id'   => 'required|numeric|exists:specifications,id',
            'is_used'            => 'required',
            // 'auction'            => 'required',
            'image'              => 'required|image',
            // 'vedio'              => 'required|vedio'
        ];
    }
}
