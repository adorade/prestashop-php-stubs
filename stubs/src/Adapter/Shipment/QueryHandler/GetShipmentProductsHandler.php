<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetShipmentProductsHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler\GetShipmentProductsHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $repository, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private readonly \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageUrlFactory, private readonly \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, private \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentProducts $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\OrderShipmentProduct[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentProducts $query)
    {
    }
}
