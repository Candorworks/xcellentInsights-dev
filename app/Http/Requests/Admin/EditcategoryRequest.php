<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 
use Illuminate\Http\Request;

class EditcategoryRequest extends FormRequest
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

    public function rules(Request $request)
    {
        
        return [
            'name' => ['required', 'max:100', Rule::unique('categories')->where(function ($query) use ($request) {
                return $query->where('id','!=',$request->segments()[2])->where('parent_id', $request->parent_id);
            })],
        ];
    }

    public function messages()
    {
       return [
            'name.required'  => 'Please enter category name.',
       ];
    }
}
