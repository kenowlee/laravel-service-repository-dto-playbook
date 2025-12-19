<?php

namespace Examples\App\Support;

use Examples\App\Exceptions\ApiException;

final class ApiResponse
{
    public static function success(array $data = [], int $httpcode = 200, string $message = 'OK'): array
    {
        return [
            'success' => true,
            'httpcode' => $httpcode,
            'message' => $message,
            'data' => $data,
        ];
    }

    public static function error(ApiException $e): array
    {
        return [
            'success' => false,
            'httpcode' => $e->httpcode,
            'code' => $e->codeEnum->value,
            'message' => $e->getMessage(),
            'details' => (object) $e->details,
        ];
    }
}
