<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

/**
 * Handle Register Request
 * @property-read string $name
 * @property-read string $email
 * @property-read string $password
 */
class RegisterRequest extends FormRequest
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
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'confirmed', 'unique:users'],
            'password'=> ['required', Password::defaults()]
        ];
    }

    /**
     * Attempt to register in the system
     * @return bool
     */
    public function attemptToRegister(): bool {
    
        $user = User::query()->create($this->validated());
    
        //Logar
        auth()->login($user);
        
        return true;
    }
}
