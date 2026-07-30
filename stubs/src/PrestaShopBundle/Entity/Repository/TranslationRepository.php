<?php

namespace PrestaShopBundle\Entity\Repository;

class TranslationRepository extends \Doctrine\ORM\EntityRepository implements \PrestaShop\PrestaShop\Core\Translation\TranslationRepositoryInterface
{
    /**
     * @param string $language
     * @param string $theme
     *
     * @return array
     */
    public function findByLanguageAndTheme($language, $theme = null)
    {
    }
}
