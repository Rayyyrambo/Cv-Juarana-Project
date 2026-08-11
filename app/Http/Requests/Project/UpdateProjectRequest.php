<?php

namespace App\Http\Requests\Project;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_project'=>'required|string|max:255',
            'tanggal_project'=>'required|date',
            'alamat_project'=>'required|string|max:255',
            'image'=>'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ];
    }
}
