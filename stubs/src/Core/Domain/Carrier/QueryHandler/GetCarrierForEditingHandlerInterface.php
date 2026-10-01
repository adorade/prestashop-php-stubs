<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryHandler;

/**
 * Describes get carrier handler.
 */
interface GetCarrierForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetCarrierForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\EditableCarrier
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetCarrierForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\EditableCarrier;
}
