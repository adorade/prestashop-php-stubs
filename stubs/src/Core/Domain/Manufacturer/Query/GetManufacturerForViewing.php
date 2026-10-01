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
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId
     */
    public function getManufacturerId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
     */
    public function getLanguageId()
    {
    }
}
