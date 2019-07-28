<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title' => 'required|min:10|max:235|unique:posts,title',
            'category_id' => 'required|numeric',
            'image' => 'required|mimes:png,jpg,jpeg',
            'body' => 'required',
            'tags' => 'required|array',
        ];
    }
}
