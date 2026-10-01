<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\QueryHandler;

/**
 * Handles query which gets attribute group for editing
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetAttributeForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\QueryHandler\GetAttributeForEditingHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Query\GetAttributeForEditing $query): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\QueryResult\EditableAttribute
    {
    }
}
