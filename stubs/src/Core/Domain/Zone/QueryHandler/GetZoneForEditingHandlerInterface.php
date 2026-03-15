<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\QueryHandler;

/**
 * Defines contract for GetZoneForEditingHandler
 */
interface GetZoneForEditingHandlerInterface
{
    /**
     * @param GetZoneForEditing $query
     *
     * @return EditableZone
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Query\GetZoneForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Zone\QueryResult\EditableZone;
}
