<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $roleId = request()->input('role_id');
        
        if ($roleId == 2) {
            $valid = 'nullable';
        } elseif ($roleId == 3) {
            $valid = 'required';
        } else {
            $valid = 'nullable'; 
        }

        return [
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|confirmed|min:6',
            'role_id' => 'required|string|exists:roles,id',
            'business_name' => [$valid, 'string'],
            'event_category_id' => [$valid, 'exists:event_categories,id'],
        ];
    }
}
