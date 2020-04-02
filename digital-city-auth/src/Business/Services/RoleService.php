<?php

namespace src\Business\Services;

use src\Data\Repositories\RoleRepository;
use src\Business\Mappers\Role\Response\RoleListResponseMapper;
use src\Business\Mappers\Role\Request\RoleListRequestMapper;
use src\Business\Factories\Role\RoleListResponseMapperFactory;

class RoleService
{
    private RoleRepository $roleRepository;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function getAll(RoleListRequestMapper $mapper) : RoleListResponseMapper
    {
        $roles = $this->roleRepository->get($mapper->getSort());

        $responseMapper = RoleListResponseMapperFactory::make($roles);

        return $responseMapper;
    }
}