<?php

namespace Examples\App\Services\Users;

use Examples\App\DTO\Users\CreateUserDTO;
use Examples\App\Repositories\Users\UserRepository;

final class UserService
{
    public function __construct(
        private readonly UserRepository $users
    ) {}

    public function create(CreateUserDTO $dto): array
    {
        $this->users->ensureEmailIsUnique($dto->email);

        return $this->users->create($dto->toArray());
    }
}
