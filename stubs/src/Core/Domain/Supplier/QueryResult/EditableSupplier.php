<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\QueryResult;

/**
 * Transfers supplier data for editing
 */
class EditableSupplier
{
    /**
     * @param SupplierId $supplierId
     * @param string $name
     * @param string[] $localizedDescriptions
     * @param string $address
     * @param string $city
     * @param string $address2
     * @param int $countryId
     * @param string $postCode
     * @param int $stateId
     * @param string $phone
     * @param string $mobilePhone
     * @param string[] $localizedMetaTitles
     * @param string[] $localizedMetaDescriptions
     * @param string[] $localizedMetaKeywords
     * @param bool $enabled
     * @param array $associatedShops
     * @param string $dni
     * @param array|null $logoImage
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId $supplierId, string $name, array $localizedDescriptions, string $address, string $city, string $address2, int $countryId, string $postCode, int $stateId, string $phone, string $mobilePhone, array $localizedMetaTitles, array $localizedMetaDescriptions, array $localizedMetaKeywords, bool $enabled, array $associatedShops, string $dni, ?array $logoImage = null)
    {
    }
    /**
     * @return SupplierId
     */
    public function getSupplierId(): \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDescriptions(): array
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
     * @return string
     */
    public function getAddress2(): string
    {
    }
    /**
     * @return int
     */
    public function getCountryId(): int
    {
    }
    /**
     * @return string
     */
    public function getPostCode(): string
    {
    }
    /**
     * @return int
     */
    public function getStateId(): int
    {
    }
    /**
     * @return string
     */
    public function getPhone(): string
    {
    }
    /**
     * @return string
     */
    public function getMobilePhone(): string
    {
    }
    /**
     * @return array|null
     */
    public function getLogoImage(): ?array
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
     * @return array
     */
    public function getAssociatedShops(): array
    {
    }
    /**
     * @return string
     */
    public function getDni(): string
    {
    }
}
