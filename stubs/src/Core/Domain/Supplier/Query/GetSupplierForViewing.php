<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Query;

/**
 * Get supplier information for viewing
 */
class GetSupplierForViewing
{
    /**
     * @param int $supplierId
     * @param int $languageId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     */
    public function __construct($supplierId, $languageId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId
     */
    public function getSupplierId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
     */
    public function getLanguageId()
    {
    }
}
