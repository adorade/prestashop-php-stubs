<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\QueryResult;

/**
 * Transfers editable language's data
 */
class EditableLanguage
{
    /**
     * @param LanguageId $languageId
     * @param string $name
     * @param IsoCode $isoCode
     * @param TagIETF $tagIETF
     * @param string $shortDateFormat
     * @param string $fullDateFormat
     * @param bool $isRtl
     * @param bool $isActive
     * @param array $shopAssociation
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, $name, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\IsoCode $isoCode, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\TagIETF $tagIETF, $shortDateFormat, $fullDateFormat, $isRtl, $isActive, array $shopAssociation)
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId()
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
     * @return array
     */
    public function getShopAssociation()
    {
    }
}
