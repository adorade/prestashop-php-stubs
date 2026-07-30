<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Command;

/**
 * Edits supplier with provided data
 */
class EditSupplierCommand
{
    /**
     * @param int $supplierId
     *
     * @throws SupplierException
     */
    public function __construct(int $supplierId)
    {
    }
    /**
     * @return SupplierId
     */
    public function getSupplierId(): \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
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
     * @return EditSupplierCommand
     */
    public function setName(string $name): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedDescriptions(): ?array
    {
    }
    /**
     * @param string[] $localizedDescriptions
     *
     * @return EditSupplierCommand
     */
    public function setLocalizedDescriptions(array $localizedDescriptions): self
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
     * @return EditSupplierCommand
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
     * @return EditSupplierCommand
     */
    public function setCity(string $city): self
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
     * @return EditSupplierCommand
     */
    public function setAddress2(string $address2): self
    {
    }
    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
    }
    /**
     * @param int $countryId
     *
     * @return EditSupplierCommand
     */
    public function setCountryId(int $countryId): self
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
     * @return EditSupplierCommand
     */
    public function setPostCode(string $postCode): self
    {
    }
    /**
     * @return int|null
     */
    public function getStateId(): ?int
    {
    }
    /**
     * @param int $stateId
     *
     * @return EditSupplierCommand
     */
    public function setStateId(int $stateId): self
    {
    }
    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
    }
    /**
     * @param string $phone
     *
     * @return EditSupplierCommand
     */
    public function setPhone(string $phone): self
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
     * @return EditSupplierCommand
     */
    public function setMobilePhone(string $mobilePhone): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaTitles(): ?array
    {
    }
    /**
     * @param string[] $localizedMetaTitles
     *
     * @return EditSupplierCommand
     */
    public function setLocalizedMetaTitles(array $localizedMetaTitles): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaDescriptions(): ?array
    {
    }
    /**
     * @param string[] $localizedMetaDescriptions
     *
     * @return EditSupplierCommand
     */
    public function setLocalizedMetaDescriptions(array $localizedMetaDescriptions): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaKeywords(): ?array
    {
    }
    /**
     * @param string[] $localizedMetaKeywords
     *
     * @return EditSupplierCommand
     */
    public function setLocalizedMetaKeywords(array $localizedMetaKeywords): self
    {
    }
    /**
     * @return bool|null
     */
    public function isEnabled(): ?bool
    {
    }
    /**
     * @param bool $enabled
     *
     * @return EditSupplierCommand
     */
    public function setEnabled(bool $enabled): self
    {
    }
    /**
     * @return array|null
     */
    public function getAssociatedShops(): ?array
    {
    }
    /**
     * @param array $associatedShops
     *
     * @return EditSupplierCommand
     */
    public function setAssociatedShops(array $associatedShops): self
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
     * @return EditSupplierCommand
     */
    public function setDni(string $dni): self
    {
    }
}
