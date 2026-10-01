<?php

namespace PrestaShop\PrestaShop\Adapter\Address\Repository;

/**
 * Provides access to address data source
 */
class AddressRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId
     *
     * @return \Address
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId): \Address
    {
    }
}
