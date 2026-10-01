<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\AttributeGroup\QueryHandler;

/**
 * Handles @see GetProductAttributeGroups query
 */
interface GetProductAttributeGroupsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\AttributeGroup\Query\GetProductAttributeGroups $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryResult\AttributeGroup[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\AttributeGroup\Query\GetProductAttributeGroups $query): array;
}
