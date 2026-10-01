<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryHandler;

/**
 * Defines contract to handle @see GetAttributeGroupList
 */
interface GetAttributeGroupListHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Query\GetAttributeGroupList $query
     *
     * @return array
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Query\GetAttributeGroupList $query): array;
}
