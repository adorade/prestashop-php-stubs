<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command;

/**
 * Edits manufacturer with provided data
 */
class EditManufacturerCommand
{
    /**
     * @param int $manufacturerId
     */
    public function __construct($manufacturerId)
    {
    }
    /**
     * @return ManufacturerId
     */
    public function getManufacturerId()
    {
    }
    /**
     * @return string|null
     */
    public function getName()
    {
    }
    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName($name)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedShortDescriptions()
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedDescriptions()
    {
    }
    /**
     * @param string[]|null $localizedDescriptions
     *
     * @return self
     */
    public function setLocalizedDescriptions($localizedDescriptions)
    {
    }
    /**
     * @param string[]|null $localizedShortDescriptions
     *
     * @return self
     */
    public function setLocalizedShortDescriptions($localizedShortDescriptions)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaTitles()
    {
    }
    /**
     * @param string[]|null $localizedMetaTitles
     *
     * @return self
     */
    public function setLocalizedMetaTitles($localizedMetaTitles)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaDescriptions()
    {
    }
    /**
     * @param string[]|null $localizedMetaDescriptions
     *
     * @return self
     */
    public function setLocalizedMetaDescriptions($localizedMetaDescriptions)
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaKeywords()
    {
    }
    /**
     * @param string[]|null $localizedMetaKeywords
     *
     * @return self
     */
    public function setLocalizedMetaKeywords($localizedMetaKeywords)
    {
    }
    /**
     * @return bool|null
     */
    public function isEnabled()
    {
    }
    /**
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
    }
    /**
     * @return array
     */
    public function getAssociatedShops()
    {
    }
    /**
     * @param array $associatedShops
     *
     * @return self
     */
    public function setAssociatedShops($associatedShops)
    {
    }
}
