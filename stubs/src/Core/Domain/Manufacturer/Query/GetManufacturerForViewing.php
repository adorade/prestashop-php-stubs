<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query;

/**
 * Get manufacturer information for viewing
 */
class GetManufacturerForViewing
{
    /**
     * @param int $manufacturerId
     * @param int $languageId
     */
    public function __construct($manufacturerId, $languageId)
    {
    }
    /**
     * @return ManufacturerId
     */
    public function getManufacturerId()
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId()
    {
    }
}
