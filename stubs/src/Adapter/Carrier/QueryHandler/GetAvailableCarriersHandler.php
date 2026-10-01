<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetAvailableCarriersHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryHandler\GetAvailableCarriersHandlerInterface
{
    public function __construct(
        private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository,
        private readonly \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository,
        private readonly \PrestaShop\PrestaShop\Adapter\Address\Repository\AddressRepository $addressRepository,
        private readonly \PrestaShop\PrestaShop\Adapter\Zone\Repository\ZoneRepository $zoneRepository,
        private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.default.language.context')]
        private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $defaultLanguageContext,
        private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext
    )
    {
    }
    /**
     * Handle the query to retrieve available and filtered carriers based on products, delivery address and constraints.
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetAvailableCarriers $query): \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\GetCarriersResult
    {
    }
}
