<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\LangRepository")
 */
class Lang implements \PrestaShop\PrestaShop\Core\Language\LanguageInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
    }
    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Lang
     */
    public function setName($name)
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Set active.
     *
     * @param int $active
     *
     * @return Lang
     */
    public function setActive($active)
    {
    }
    /**
     * Get active.
     *
     * @return int
     */
    public function getActive()
    {
    }
    /**
     * Set isoCode.
     *
     * @param string $isoCode
     *
     * @return Lang
     */
    public function setIsoCode($isoCode)
    {
    }
    /**
     * Get isoCode.
     *
     * @return string
     */
    public function getIsoCode()
    {
    }
    /**
     * Set languageCode.
     *
     * @param string $languageCode
     *
     * @return Lang
     */
    public function setLanguageCode($languageCode)
    {
    }
    /**
     * Get languageCode.
     *
     * @return string
     */
    public function getLanguageCode()
    {
    }
    /**
     * Set dateFormatLite.
     *
     * @param string $dateFormatLite
     *
     * @return Lang
     */
    public function setDateFormatLite($dateFormatLite)
    {
    }
    /**
     * Get dateFormatLite.
     *
     * @return string
     */
    public function getDateFormatLite()
    {
    }
    /**
     * Set dateFormatFull.
     *
     * @param string $dateFormatFull
     *
     * @return Lang
     */
    public function setDateFormatFull($dateFormatFull)
    {
    }
    /**
     * Get dateFormatFull.
     *
     * @return string
     */
    public function getDateFormatFull()
    {
    }
    /**
     * Set isRtl.
     *
     * @param bool $isRtl
     *
     * @return Lang
     */
    public function setIsRtl($isRtl)
    {
    }
    /**
     * Get isRtl.
     *
     * @return bool
     */
    public function getIsRtl()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isRTL()
    {
    }
    /**
     * @return string
     */
    public function getLocale()
    {
    }
    /**
     * @param string $locale
     *
     * @return Lang
     */
    public function setLocale($locale)
    {
    }
    /**
     * Add shop.
     *
     * @param Shop $shop
     *
     * @return Lang
     */
    public function addShop(\PrestaShopBundle\Entity\Shop $shop)
    {
    }
    /**
     * Remove shop.
     *
     * @param Shop $shop
     */
    public function removeShop(\PrestaShopBundle\Entity\Shop $shop)
    {
    }
    /**
     * Get shops.
     *
     * @return Collection
     */
    public function getShops()
    {
    }
    /**
     * Get translations.
     *
     * @return Collection
     */
    public function getTranslations()
    {
    }
}
