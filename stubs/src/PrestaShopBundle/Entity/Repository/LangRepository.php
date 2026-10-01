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
     * @return \PrestaShopBundle\Entity\Lang|null
     */
    public function getOneByLocale($locale)
    {
    }
    /**
     * @param string $isoCode
     *
     * @return \PrestaShopBundle\Entity\Lang|null
     */
    public function getOneByIsoCode($isoCode)
    {
    }
    /**
     * @param string $locale
     *
     * @return \PrestaShopBundle\Entity\Lang|null
     */
    public function getOneByLocaleOrIsoCode($locale)
    {
    }
    /**
     * Returns all the mapping for all installed languages, the returned array is indexed by Language ID,
     * it contains an array with Language info, only locale is relevant for now but it may evolve in the future.
     *
     * @return array<int, array{'locale': string}>
     */
    public function getMapping(): array
    {
    }
}
