<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\QueryHandler;

/**
 * Handles the query GetAttributeGroupList using Doctrine repository
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetAttributeGroupListHandler extends \PrestaShop\PrestaShop\Adapter\AttributeGroup\QueryHandler\AbstractAttributeGroupQueryHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryHandler\GetAttributeGroupListHandlerInterface
{
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Query\GetAttributeGroupList $query): array
    {
    }
}
