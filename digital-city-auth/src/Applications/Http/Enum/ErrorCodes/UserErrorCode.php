<?php

namespace src\Applications\Http\Enum\ErrorCodes;

final class UserErrorCode extends ErrorCodes
{
    const ERR_EMPTY_NAME         = 'ERR_EMPTY_NAME';
    const ERR_EMPTY_PASSWORD     = 'ERR_EMPTY_PASSWORD';
    const ERR_INVALID_SORT       = 'ERR_INVALID_SORT';
    const ERR_EMPTY_IDENTIFIER   = 'ERR_EMPTY_IDENTIFIER';
    const ERR_INVALID_IDENTIFIER = 'ERR_INVALID_IDENTIFIER';
    const ERR_NOT_STRING         = 'ERR_NOT_STRING';
    const ERR_INVALID_EMAIL      = 'ERR_INVALID_EMAIL';
    const ERR_INVALID_DATE       = 'ERR_INVALID_DATE';
}
