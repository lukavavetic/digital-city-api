<?php

namespace src\Business\Services;

use Illuminate\Database\QueryException;
use src\Applications\Http\Factories\Organisation\OrganisationUsersRequestMapperFactory;
use src\Business\Factories\Organisation\OrganisationCreateResponseMapperFactory;
use src\Business\Factories\Organisation\OrganisationUpdateResponseMapperFactory;
use src\Business\Factories\Organisation\OrganisationUsersResponseMapperFactory;
use src\Business\Mappers\Organisation\Request\OrganisationDeleteRequestMapper;
use src\Business\Mappers\Organisation\Request\OrganisationUpdateRequestMapper;
use src\Business\Mappers\Organisation\Request\OrganisationUsersRequestMapper;
use src\Business\Mappers\Organisation\Response\OrganisationDeleteResponseMapper;
use src\Business\Mappers\Organisation\Response\OrganisationUpdateResponseMapper;
use src\Business\Mappers\Organisation\Response\OrganisationUsersResponseMapper;
use src\Data\Entities\Organisation;
use src\Business\Mappers\Organisation\Request\OrganisationCreateRequestMapper;
use src\Business\Mappers\Organisation\Response\OrganisationCreateResponseMapper;
use src\Data\Repositories\OrganisationRepository;
use src\Business\Mappers\Organisation\Request\OrganisationListRequestMapper;
use src\Business\Mappers\Organisation\Request\OrganisationInfoRequestMapper;
use src\Business\Mappers\Organisation\Response\OrganisationInfoResponseMapper;
use src\Business\Mappers\Organisation\Response\OrganisationListResponseMapper;
use src\Business\Factories\Organisation\OrganisationListResponseMapperFactory;
use src\Business\Factories\Organisation\OrganisationDeleteResponseMapperFactory;
use src\Business\Factories\Organisation\OrganisationInfoResponseMapperFactory;

class OrganisationService
{
    private OrganisationRepository $organisationRepository;

    public function __construct(OrganisationRepository $organisationRepository)
    {
        $this->organisationRepository = $organisationRepository;
    }

    public function getAll(OrganisationListRequestMapper $mapper) : OrganisationListResponseMapper
    {
        $organisations = $this->organisationRepository->get($mapper->getSort());

        $responseMapper = OrganisationListResponseMapperFactory::make($organisations);

        return $responseMapper;
    }

    public function getOne(OrganisationInfoRequestMapper $mapper) : OrganisationInfoResponseMapper
    {
        $organisation = $this->organisationRepository->findOne($mapper->getIdentifier());

        $responseMapper = OrganisationInfoResponseMapperFactory::make($organisation);

        return $responseMapper;
    }

    public function getUsers(OrganisationUsersRequestMapper $mapper) : OrganisationUsersResponseMapper
    {
        $organisation = $this->organisationRepository->findOne($mapper->getIdentifier());

        $responseMapper = OrganisationUsersResponseMapperFactory::make($organisation);

        return $responseMapper;
    }

    public function create(OrganisationCreateRequestMapper $mapper) : OrganisationCreateResponseMapper
    {
        $organisation = new Organisation();

        $organisation->identifier = $mapper->getIdentifier();
        $organisation->name = $mapper->getName();
        $organisation->city_id = $mapper->getCity();
        $organisation->county_id = $mapper->getCounty();
        $organisation->primary_color = $mapper->getPrimaryColor();
        $organisation->secondary_color = $mapper->getSecondaryColor();
        $organisation->tertiary_color = $mapper->getTertiaryColor();
        $organisation->description = $mapper->getDescription();
        $organisation->logo = $mapper->getLogo();

        $stored = null;

        $stored = $this->organisationRepository->store($organisation);

        if ($stored === false) {
            throw new \Exception("Failed to store new organisation!", 400);
        }

        $responseMapper = OrganisationCreateResponseMapperFactory::make($organisation);

        return $responseMapper;
    }

    public function update(OrganisationUpdateRequestMapper $mapper) : OrganisationUpdateResponseMapper
    {
        $organisation = $this->organisationRepository->findOne($mapper->getIdentifier());

        if ($mapper->getName() !== null) {
            $organisation->name = $mapper->getName();
        }

        if ($mapper->getCity() !== null) {
            $organisation->city = $mapper->getCity();
        }

        if ($mapper->getCounty() !== null) {
            $organisation->county = $mapper->getCounty();
        }

        if ($mapper->getCountry() !== null) {
            $organisation->country = $mapper->getCountry();
        }

        if ($mapper->getDescription() !== null) {
            $organisation->description = $mapper->getDescription();
        }

        if ($mapper->getPrimaryColor() !== null) {
            $organisation->primary_color = $mapper->getPrimaryColor();
        }

        if ($mapper->getSecondaryColor() !== null) {
            $organisation->secondary_color = $mapper->getSecondaryColor();
        }

        if ($mapper->getTertiaryColor() !== null) {
            $organisation->tertiary_color = $mapper->getTertiaryColor();
        }

        if ($mapper->getLogo() !== null) {
            $organisation->logo = $mapper->getLogo();
        }

        $stored = null;

        $stored = $this->organisationRepository->store($organisation);

        if ($stored === false) {
            throw new \Exception("Failed to update existing organisation!", 400);
        }

        $responseMapper = OrganisationUpdateResponseMapperFactory::make($organisation);

        return $responseMapper;
    }

    public function delete(OrganisationDeleteRequestMapper $mapper) : OrganisationDeleteResponseMapper
    {
        $organisation = $this->organisationRepository->findOne($mapper->getIdentifier());

        $stored = null;

        $stored = $this->organisationRepository->destroy($organisation);

        if ($stored === false) {
            throw new \Exception("Failed to delete organisation!", 400);
        }

        $responseMapper = OrganisationDeleteResponseMapperFactory::make($organisation);

        return $responseMapper;
    }
}
