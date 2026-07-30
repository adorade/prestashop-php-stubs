<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Command;

class AbstractEditAddressCommand
{
    /**
     * @var string|null
     */
    protected $addressAlias;
    /**
     * @var string|null
     */
    protected $firstName;
    /**
     * @var string|null
     */
    protected $lastName;
    /**
     * @var string|null
     */
    protected $address;
    /**
     * @var string|null
     */
    protected $city;
    /**
     * @var string|null
     */
    protected $postCode;
    /**
     * @var CountryId|null
     */
    protected $countryId;
    /**
     * @var string|null
     */
    protected $dni;
    /**
     * @var string|null
     */
    protected $company;
    /**
     * @var string|null
     */
    protected $vatNumber;
    /**
     * @var string|null
     */
    protected $address2;
    /**
     * @var StateIdInterface|null
     */
    protected $stateId;
    /**
     * @var string|null
     */
    protected $homePhone;
    /**
     * @var string|null
     */
    protected $mobilePhone;
    /**
     * @var string|null
     */
    protected $other;
    /**
     * @return string|null
     */
    public function getAddressAlias(): ?string
    {
    }
    /**
     * @param string $addressAlias
     *
     * @return self
     */
    public function setAddressAlias(string $addressAlias): self
    {
    }
    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
    }
    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
    }
    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
    }
    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
    }
    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
    }
    /**
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
    }
    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
    }
    /**
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
    }
    /**
     * @return string|null
     */
    public function getPostCode(): ?string
    {
    }
    /**
     * @param string $postCode
     *
     * @return self
     */
    public function setPostCode(string $postCode): self
    {
    }
    /**
     * @return CountryId|null
     */
    public function getCountryId(): ?\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
    /**
     * @param int $countryId
     *
     * @return self
     *
     * @throws CountryConstraintException
     */
    public function setCountryId(int $countryId): self
    {
    }
    /**
     * @return string|null
     */
    public function getDni(): ?string
    {
    }
    /**
     * @param string $dni
     *
     * @return self
     */
    public function setDni(string $dni): self
    {
    }
    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
    }
    /**
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company): self
    {
    }
    /**
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
    }
    /**
     * @param string $vatNumber
     *
     * @return self
     */
    public function setVatNumber(string $vatNumber): self
    {
    }
    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
    }
    /**
     * @param string $address2
     *
     * @return self
     */
    public function setAddress2(string $address2): self
    {
    }
    /**
     * @return StateIdInterface|null
     */
    public function getStateId(): ?\PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateIdInterface
    {
    }
    /**
     * @param int $stateId
     *
     * @return self
     *
     * @throws StateConstraintException
     */
    public function setStateId(int $stateId): self
    {
    }
    /**
     * @return string|null
     */
    public function getHomePhone(): ?string
    {
    }
    /**
     * @param string $homePhone
     *
     * @return self
     */
    public function setHomePhone(string $homePhone): self
    {
    }
    /**
     * @return string|null
     */
    public function getMobilePhone(): ?string
    {
    }
    /**
     * @param string $mobilePhone
     *
     * @return self
     */
    public function setMobilePhone(string $mobilePhone): self
    {
    }
    /**
     * @return string|null
     */
    public function getOther(): ?string
    {
    }
    /**
     * @param string $other
     *
     * @return self
     */
    public function setOther(string $other): self
    {
    }
}
