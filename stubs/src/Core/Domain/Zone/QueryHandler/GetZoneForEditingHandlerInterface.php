<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\QueryHandler;

/**
 * Defines contract for GetZoneForEditingHandler
 */
interface GetZoneForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Zone\Query\GetZoneForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Zone\QueryResult\EditableZone
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Query\GetZoneForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Zone\QueryResult\EditableZone;
}
