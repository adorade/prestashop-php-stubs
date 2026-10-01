<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class ListAvailableShipmentsForProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler\ListAvailableShipmentsForProductHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $repository, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, private readonly \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, private readonly \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderDetailRepository $orderDetailRepository)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentsForProduct[]
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\CannotFindProductInOrderException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\ListAvailableShipmentsForProduct $query)
    {
    }
}
