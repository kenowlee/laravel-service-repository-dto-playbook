<?php

namespace Examples\App\Exceptions;

enum ErrorCode: string
{
    case USR_EMAIL_EXISTS = 'USR_001';
    case USR_VALIDATION = 'USR_002';
}
