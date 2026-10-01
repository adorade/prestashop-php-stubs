<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCarriersForProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryHandler\GetCarriersForProductHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetCarriersForProduct $query)
    {
    }
}
