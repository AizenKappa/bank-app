<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    // Indicates if the validator should stop on the first rule failure.
    protected $stopOnFirstFailure = true;

    public function authorize(): bool
    {
        return true;
    }

    public function passedValidation(): void
    {
        $this->merge([
            'credentials' =>  [
                'email' => $this->email,
                'password' => $this->password
            ]
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function messages(): array
    {
        return [
            'email.required' => ':attribute is required',
            'password.required' => 'Password is required',
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => 'Email address',
        ];
    }


    public function rules(): array
    {
        return [
            'email' => 'bail|required|email',
            'password' => 'required',
        ];
    }
}
