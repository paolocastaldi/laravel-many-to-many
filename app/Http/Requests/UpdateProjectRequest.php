<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'title' => [
                'required',
                'max:150',
                Rule::unique('projects', 'title')->ignore($this->project)
            ],
            'client' => 'required|max:150',
            'url' => 'required|max:255',
            'description' => 'nullable|string',
            'technologies' => 'exists:technologies,id',
        ];
    }
}