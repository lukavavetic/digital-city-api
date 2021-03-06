<?php

namespace src\Applications\Http\Enum\ErrorCodes;

final class UserErrorCode extends ErrorCodes
{
    const ERR_EMPTY_EMAIL                 = 'ERR_EMPTY_EMAIL';
    const ERR_EMPTY_PASSWORD              = 'ERR_EMPTY_PASSWORD';
    const ERR_INVALID_PASSWORD            = 'ERR_INVALID_PASSWORD';
    const ERR_INVALID_SORT                = 'ERR_INVALID_SORT';
    const ERR_EMPTY_IDENTIFIER            = 'ERR_EMPTY_IDENTIFIER';
    const ERR_INVALID_IDENTIFIER          = 'ERR_INVALID_IDENTIFIER';
    const ERR_INVALID_FIRSTNAME           = 'ERR_INVALID_FIRSTNAME';
    const ERR_INVALID_LASTNAME            = 'ERR_INVALID_LASTNAME';
    const ERR_INVALID_EMAIL               = 'ERR_INVALID_EMAIL';
    const ERR_INVALID_DATE                = 'ERR_INVALID_DATE';
    const ERR_INVALID_COUNTRY             = 'ERR_INVALID_COUNTRY';
    const ERR_INVALID_CITY                = 'ERR_INVALID_CITY';
    const ERR_EMPTY_ROLES_FIELD           = 'ERR_EMPTY_ROLES_FIELD';
    const ERR_INVALID_ROLES_FIELD         = 'ERR_INVALID_ROLES_FIELD';
    const ERR_INVALID_PERMISSIONS_FIELD   = 'ERR_INVALID_PERMISSIONS_FIELD';
    const ERR_INVALID_RELATIONS           = 'ERR_INVALID_RELATIONS';
    const ERR_INVALID_ORGANISATIONS_FIELD = 'ERR_INVALID_ORGANISATIONS_FIELD';
    const ERR_EMPTY_ORGANISATIONS_FIELD   = 'ERR_EMPTY_ORGANISATIONS_FIELD';
}
