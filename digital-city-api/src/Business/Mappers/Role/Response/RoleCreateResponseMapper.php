<?php

namespace src\Business\Mappers\Role\Response;

use JsonSerializable;
use src\Business\Mappers\Role\RoleMapper;

class RoleCreateResponseMapper implements JsonSerializable
{
    private string $identifier;

    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
    }

    public function getIdentifier() : string
    {
        return $this->identifier;
    }

    public function jsonSerialize()
    {
        return [
            'data' =>  [
                'identifier' => $this->identifier
            ]
        ];
    }
}
