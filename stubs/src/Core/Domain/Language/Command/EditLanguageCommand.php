<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Command;

/**
 * Edits given language with provided data
 */
class EditLanguageCommand
{
    /**
     * @param int $languageId
     */
    public function __construct($languageId)
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId()
    {
    }
    /**
     * @param LanguageId $languageId
     *
     * @return self
     */
    public function setLanguageId($languageId)
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
     * @return IsoCode|null
     */
    public function getIsoCode()
    {
    }
    /**
     * @param string $isoCode
     *
     * @return self
     */
    public function setIsoCode($isoCode)
    {
    }
    /**
     * @return TagIETF|null
     */
    public function getTagIETF()
    {
    }
    /**
     * @param string $tagIETF
     *
     * @return self
     */
    public function setTagIETF($tagIETF)
    {
    }
    /**
     * @return string|null
     */
    public function getShortDateFormat()
    {
    }
    /**
     * @param string $shortDateFormat
     *
     * @return self
     */
    public function setShortDateFormat($shortDateFormat)
    {
    }
    /**
     * @return string|null
     */
    public function getFullDateFormat()
    {
    }
    /**
     * @param string $fullDateFormat
     *
     * @return self
     */
    public function setFullDateFormat($fullDateFormat)
    {
    }
    /**
     * @return string|null
     */
    public function getFlagImagePath()
    {
    }
    /**
     * @param string $flagImagePath
     *
     * @return self
     */
    public function setFlagImagePath($flagImagePath)
    {
    }
    /**
     * @return string|null
     */
    public function getNoPictureImagePath()
    {
    }
    /**
     * @param string $noPictureImagePath
     *
     * @return self
     */
    public function setNoPictureImagePath($noPictureImagePath)
    {
    }
    /**
     * @return bool|null
     */
    public function isRtl()
    {
    }
    /**
     * @param bool $isRtl
     *
     * @return self
     */
    public function setIsRtl($isRtl)
    {
    }
    /**
     * @return bool|null
     */
    public function isActive()
    {
    }
    /**
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive($isActive)
    {
    }
    /**
     * @return int[]|null
     */
    public function getShopAssociation()
    {
    }
    /**
     * @param int[] $shopAssociation
     *
     * @return self
     */
    public function setShopAssociation(array $shopAssociation)
    {
    }
}
