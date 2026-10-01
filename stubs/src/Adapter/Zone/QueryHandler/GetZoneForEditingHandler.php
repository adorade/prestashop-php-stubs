<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\QueryHandler;

/**
 * Handles command that gets zone for editing
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetZoneForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Zone\QueryHandler\GetZoneForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Query\GetZoneForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Zone\QueryResult\EditableZone
    {
    }
}
