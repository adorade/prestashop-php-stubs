<?php

namespace PrestaShopBundle\Entity\Repository;

class LangRepository extends \Doctrine\ORM\EntityRepository implements \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface
{
    public const ISO_CODE = 'isoCode';
    public const LOCALE = 'locale';
    /**
     * @param string $isoCode
     *
     * @return string
     */
    public function getLocaleByIsoCode($isoCode)
    {
    }
    /**
     * @param string $locale
     *
     * @return Lang|null
     */
    public function getOneByLocale($locale)
    {
    }
    /**
     * @param string $isoCode
     *
     * @return Lang|null
     */
    public function getOneByIsoCode($isoCode)
    {
    }
    /**
     * @param string $locale
     *
     * @return Lang|null
     */
    public function getOneByLocaleOrIsoCode($locale)
    {
    }
}
