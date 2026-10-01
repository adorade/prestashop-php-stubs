<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\QueryHandler;

/**
 * Handles getting manufacturer for viewing query using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetManufacturerForViewingHandler implements \PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryHandler\GetManufacturerForViewingHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query\GetManufacturerForViewing $query)
    {
    }
}
