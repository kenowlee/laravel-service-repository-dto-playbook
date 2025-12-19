<?php

namespace Examples\App\DTO\Users;

use Examples\App\Enum\UserStatus;

final class CreateUserDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly UserStatus $status,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: trim((string) $data['name']),
            email: strtolower(trim((string) $data['email'])),
            status: UserStatus::from((string) ($data['status'] ?? UserStatus::ACTIVE->value)),
        );
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'status' => $this->status->value,
        ];
    }
}
