<?php

namespace PrestaShop\PrestaShop\Core\Translation;

/**
 * Interface TranslationRepositoryInterface allows to fetch a TranslationInterface
 * via different methods.
 */
interface TranslationRepositoryInterface extends \Doctrine\Persistence\ObjectRepository
{
    /**
     * @param mixed $alias
     * @param mixed|null $indexBy
     *
     * @return QueryBuilder
     */
    public function createQueryBuilder($alias, $indexBy = null);
}
