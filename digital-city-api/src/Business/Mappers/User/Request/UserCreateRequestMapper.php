<?php

namespace src\Business\Mappers\User\Request;

class UserCreateRequestMapper
{
    private string $identifier;
    private string $username;
    private string $email;
    private string $password;
    private int $roleID;
    private ?string $firstName;
    private ?string $lastName;
    private ?string $birthDate;
    private ?string $country;
    private ?string $city;

    public function __construct(string $identifier, string $email, string $username, string $password, int $roleID)
    {
        $this->identifier = $identifier;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->roleID = $roleID;
    }

    public function getIdentifier() : string
    {
        return $this->identifier;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function getRoleID() : int
    {
        return $this->roleID;
    }

    public function getFirstName() : ?string
    {
        return $this->firstName;
    }

    public function getLastName() : ?string
    {
        return $this->lastName;
    }

    public function getBirthDate() : ?string
    {
        return $this->birthDate;
    }

    public function getCountry() : ?string
    {
        return $this->country;
    }

    public function getCity() : ?string
    {
        return $this->city;
    }

    public function setFirstName(?string $firstName) : void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(?string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    public function setBirthDate(?string $birthDate) : void
    {
        $this->birthDate = $birthDate;
    }

    public function setCountry(?string $country) : void
    {
        $this->country = $country;
    }

    public function setCity(?string $city) : void
    {
        $this->city = $city;
    }
}
