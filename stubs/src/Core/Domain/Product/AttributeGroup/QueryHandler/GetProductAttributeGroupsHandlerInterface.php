<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\AttributeGroup\QueryHandler;

/**
 * Handles @see GetProductAttributeGroups query
 */
interface GetProductAttributeGroupsHandlerInterface
{
    /**
     * @param GetProductAttributeGroups $query
     *
     * @return AttributeGroup[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\AttributeGroup\Query\GetProductAttributeGroups $query): array;
}
