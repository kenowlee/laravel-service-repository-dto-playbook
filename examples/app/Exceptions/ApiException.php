<?php

namespace Examples\App\Exceptions;

use RuntimeException;

final class ApiException extends RuntimeException
{
    public function __construct(
        public readonly int $httpcode,
        public readonly ErrorCode $codeEnum,
        string $message,
        public readonly array $details = []
    ) {
        parent::__construct($message);
    }

    public static function unprocessable(ErrorCode $code, string $message, array $details = []): self
    {
        return new self(422, $code, $message, $details);
    }

    public static function badRequest(ErrorCode $code, string $message, array $details = []): self
    {
        return new self(400, $code, $message, $details);
    }
}
