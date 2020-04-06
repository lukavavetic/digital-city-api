<?php

use src\Applications\Http\Enum\ErrorCodes\RoleErrorCode;
use src\Applications\Http\Enum\ErrorCodes\UserErrorCode;

return [
    RoleErrorCode::class => [
        RoleErrorCode::ERR_EMPTY_NAME         => 'Empty role name. Role name is required.',
        RoleErrorCode::ERR_INVALID_SORT       => 'Invalid sort value. Sort should be ASC or DESC.',
        RoleErrorCode::ERR_EMPTY_IDENTIFIER   => 'Empty identifier. Identifier is required.',
        RoleErrorCode::ERR_INVALID_IDENTIFIER => 'Invalid identifier value. Identifier should be a string.',
    ],
    UserErrorCode::class => [
        UserErrorCode::ERR_INVALID_SORT       => 'Invalid sort value. Sort should be ASC or DESC.',
        UserErrorCode::ERR_EMPTY_IDENTIFIER   => 'Empty identifier. Identifier is required.',
        UserErrorCode::ERR_INVALID_IDENTIFIER => 'Invalid identifier value. Identifier should be a string.',
        UserErrorCode::ERR_EMPTY_PASSWORD     => 'Empty password. Password is required.',
        UserErrorCode::ERR_INVALID_EMAIL      => 'Invalid e-mail address format.',
        UserErrorCode::ERR_INVALID_DATE       => 'Invalid date format.',
        UserErrorCode::ERR_NOT_STRING         => 'This field should be a string.',
    ],
];
