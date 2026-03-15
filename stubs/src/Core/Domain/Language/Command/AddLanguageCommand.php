<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Command;

/**
 * Adds new language with given data
 */
class AddLanguageCommand
{
    /**
     * @param string $name
     * @param string $isoCode
     * @param string $tagIETF
     * @param string $shortDateFormat
     * @param string $fullDateFormat
     * @param string $flagImagePath
     * @param string $noPictureImagePath
     * @param bool $isRtl
     * @param bool $isActive
     * @param int[] $shopAssociation
     */
    public function __construct($name, $isoCode, $tagIETF, $shortDateFormat, $fullDateFormat, $flagImagePath, $noPictureImagePath, $isRtl, $isActive, array $shopAssociation)
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return IsoCode
     */
    public function getIsoCode()
    {
    }
    /**
     * @return TagIETF
     */
    public function getTagIETF()
    {
    }
    /**
     * @return string
     */
    public function getShortDateFormat()
    {
    }
    /**
     * @return string
     */
    public function getFullDateFormat()
    {
    }
    /**
     * @return string
     */
    public function getFlagImagePath()
    {
    }
    /**
     * @return string
     */
    public function getNoPictureImagePath()
    {
    }
    /**
     * @return bool
     */
    public function isRtl()
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociation()
    {
    }
}
