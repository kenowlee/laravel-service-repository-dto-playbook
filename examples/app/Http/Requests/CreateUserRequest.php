<?php

namespace Examples\App\Http\Requests;

final class CreateUserRequest
{
    /**
     * Em um app Laravel real, isso seria um FormRequest com rules().
     */
    public static function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2'],
            'email' => ['required', 'email'],
            'status' => ['nullable', 'in:active,inactive'],
        ];
    }
}
