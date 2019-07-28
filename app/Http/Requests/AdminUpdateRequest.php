<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateRequest extends FormRequest
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
            'name' => 'required|min:2',
            'email' => 'required|min:2|email|unique:admins,email,' . $this->admin->id,
            'job_title' => 'required|min:2',
            'status' => 'required|numeric',
            'image' => 'mimes:png,jpg,jpeg',
        ];
    }
}
