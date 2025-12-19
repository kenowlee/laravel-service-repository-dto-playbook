<?php

namespace Examples\App\Repositories\Users;

use Examples\App\Exceptions\ApiException;
use Examples\App\Exceptions\ErrorCode;

final class UserRepository
{
    /**
     * Em um app Laravel real:
     * return \App\Models\User::query()->where('email', $email)->exists();
     */
    public function emailExists(string $email): bool
    {
        // placeholder didático
        return false;
    }

    public function ensureEmailIsUnique(string $email): void
    {
        if ($this->emailExists($email)) {
            throw ApiException::unprocessable(
                code: ErrorCode::USR_EMAIL_EXISTS,
                message: 'Email already registered.'
            );
        }
    }

    /**
     * Em um app Laravel real:
     * return \App\Models\User::query()->create($data);
     */
    public function create(array $data): array
    {
        // placeholder didático
        return [
            'id' => 123,
            ...$data,
        ];
    }
}
