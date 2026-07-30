<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Command;

/**
 * Edits state with provided data
 */
class EditStateCommand
{
    /**
     * @param int $stateId
     *
     * @throws StateConstraintException
     */
    public function __construct(int $stateId)
    {
    }
    /**
     * @return StateId
     */
    public function getStateId(): \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId
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
     * @return EditStateCommand
     *
     * @throws CountryConstraintException
     */
    public function setCountryId(int $countryId): \PrestaShop\PrestaShop\Core\Domain\State\Command\EditStateCommand
    {
    }
    /**
     * @return ZoneId|null
     */
    public function getZoneId(): ?\PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId
    {
    }
    /**
     * @param int $zoneId
     *
     * @return EditStateCommand
     *
     * @throws ZoneException
     */
    public function setZoneId(int $zoneId): \PrestaShop\PrestaShop\Core\Domain\State\Command\EditStateCommand
    {
    }
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
    }
    /**
     * @param string $name
     *
     * @return EditStateCommand
     */
    public function setName(string $name): \PrestaShop\PrestaShop\Core\Domain\State\Command\EditStateCommand
    {
    }
    /**
     * @return string|null
     */
    public function getIsoCode(): ?string
    {
    }
    /**
     * @param string $isoCode
     *
     * @return EditStateCommand
     */
    public function setIsoCode(string $isoCode): \PrestaShop\PrestaShop\Core\Domain\State\Command\EditStateCommand
    {
    }
    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
    }
    /**
     * @param bool $active
     *
     * @return EditStateCommand
     */
    public function setActive(bool $active): \PrestaShop\PrestaShop\Core\Domain\State\Command\EditStateCommand
    {
    }
}
