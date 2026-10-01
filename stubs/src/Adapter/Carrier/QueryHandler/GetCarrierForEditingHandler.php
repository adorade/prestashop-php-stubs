<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\QueryHandler;

/**
 * Handles query which gets carrier
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCarrierForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryHandler\GetCarrierForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetCarrierForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\EditableCarrier
    {
    }
}
