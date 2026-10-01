<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command;

/**
 * Creates manufacturer with provided data
 */
class AddManufacturerCommand
{
    /**
     * @param string $name
     * @param bool $enabled
     * @param string[] $localizedShortDescriptions
     * @param string[] $localizedDescriptions
     * @param string[] $localizedMetaTitles
     * @param string[] $localizedMetaDescriptions
     * @param array $shopAssociation
     */
    public function __construct(string $name, bool $enabled, array $localizedShortDescriptions, array $localizedDescriptions, array $localizedMetaTitles, array $localizedMetaDescriptions, array $shopAssociation)
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
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * @return array
     */
    public function getShopAssociation()
    {
    }
}
