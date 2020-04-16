<?php

namespace src\Applications\Http\Factories\Role;

use src\Business\Mappers\Role\Request\RoleUpdateRequestMapper;

class RoleUpdateRequestMapperFactory
{
    public static function make(array $data) : RoleUpdateRequestMapper
    {
        $mapper = new RoleUpdateRequestMapper($data['identifier'], $data['name']);

        if (is_null($data['permissions']) === false) {
            $permissions = explode(', ', $data['permissions']);
            $mapper->setPermissions($permissions);
        } else {
            $mapper->setPermissions(null);
        }

        return $mapper;
    }
}

