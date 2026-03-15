<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Command;

/**
 * Creates new supplier with provided data
 */
class AddSupplierCommand
{
    /**
     * @param string $name
     * @param string $address
     * @param string $city
     * @param int $countryId
     * @param bool $enabled
     * @param string[] $localizedDescriptions
     * @param string[] $localizedMetaTitles
     * @param string[] $localizedMetaDescriptions
     * @param string[] $localizedMetaKeywords
     * @param array $shopAssociation
     * @param string|null $address2
     * @param string|null $postCode
     * @param int|null $stateId
     * @param string|null $phone
     * @param string|null $mobilePhone
     * @param string $dni
     */
    public function __construct(string $name, string $address, string $city, int $countryId, bool $enabled, array $localizedDescriptions, array $localizedMetaTitles, array $localizedMetaDescriptions, array $localizedMetaKeywords, array $shopAssociation, ?string $address2 = null, ?string $postCode = null, ?int $stateId = null, ?string $phone = null, ?string $mobilePhone = null, ?string $dni = null)
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getAddress(): string
    {
    }
    /**
     * @return string
     */
    public function getCity(): string
    {
    }
    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
    }
    /**
     * @return int
     */
    public function getCountryId(): ?int
    {
    }
    /**
     * @return string|null
     */
    public function getPostCode(): ?string
    {
    }
    /**
     * @return int|null
     */
    public function getStateId(): ?int
    {
    }
    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getMobilePhone(): ?string
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDescriptions(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaTitles(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaDescriptions(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaKeywords(): array
    {
    }
    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociation(): array
    {
    }
    /**
     * @return string|null
     */
    public function getDni(): ?string
    {
    }
}
