<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier;

/**
 * This class is a DTO containing the elements for a supplier's update, it is used in commands
 * related to updating product suppliers.
 */
class ProductSupplierUpdate
{
    /**
     * @param SupplierAssociationInterface $association
     * @param int $currencyId
     * @param string $reference
     * @param string $priceTaxExcluded
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface $association, int $currencyId, string $reference, string $priceTaxExcluded)
    {
    }
    /**
     * @return SupplierAssociationInterface
     */
    public function getAssociation(): \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ValueObject\SupplierAssociationInterface
    {
    }
    /**
     * @return CurrencyId
     */
    public function getCurrencyId(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @return string
     */
    public function getPriceTaxExcluded(): string
    {
    }
}
