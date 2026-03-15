<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryResult;

/**
 * Transfers manufacturer data for editing
 */
class EditableManufacturer
{
    /**
     * @param ManufacturerId $manufacturerId
     * @param string $name
     * @param bool $enabled
     * @param array $localizedShortDescriptions
     * @param array $localizedDescriptions
     * @param array $localizedMetaTitles
     * @param array $localizedMetaDescriptions
     * @param array $localizedMetaKeywords
     * @param array|null $logoImage
     * @param array $associatedShops
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId $manufacturerId, $name, $enabled, array $localizedShortDescriptions, array $localizedDescriptions, array $localizedMetaTitles, array $localizedMetaDescriptions, array $localizedMetaKeywords, $logoImage, array $associatedShops)
    {
    }
    /**
     * @return ManufacturerId
     */
    public function getManufacturerId()
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedShortDescriptions()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDescriptions()
    {
    }
    /**
     * @return array
     */
    public function getLogoImage()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaTitles()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaDescriptions()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMetaKeywords()
    {
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * @return array
     */
    public function getAssociatedShops()
    {
    }
}
