<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetOrderReturnProductsHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryHandler\GetOrderReturnProductsHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Query\GetOrderReturnProducts $query): array
    {
    }
}
