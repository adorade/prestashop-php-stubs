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
     * @throws SupplierException
     */
    public function __construct($supplierId, $languageId)
    {
    }
    /**
     * @return SupplierId
     */
    public function getSupplierId()
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId()
    {
    }
}
