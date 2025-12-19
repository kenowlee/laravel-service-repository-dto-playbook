<?php

namespace Examples\App\Http\Resources;

final class UserResource
{
    public static function make(array $user): array
    {
        return [
            'id' => $user['id'] ?? null,
            'name' => $user['name'] ?? null,
            'email' => $user['email'] ?? null,
            'status' => $user['status'] ?? null,
        ];
    }
}
