<?php

namespace PrestaShop\PrestaShop\Core\Repository;

trait ShopConstraintTrait
{
    protected function applyShopConstraint(\Doctrine\DBAL\Query\QueryBuilder $queryBuilder, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null): \Doctrine\DBAL\Query\QueryBuilder
    {
    }
}
