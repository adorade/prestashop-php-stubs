<?php

namespace PrestaShop\PrestaShop\Adapter\Order\QueryHandler;

/**
 * Handle getting order for viewing
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetOrderForViewingHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler\GetOrderForViewingHandlerInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param int $contextLanguageId
     * @param \PrestaShop\PrestaShop\Core\Localization\Locale $locale
     * @param \Context $context
     * @param \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider $customerDataProvider
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler\GetOrderProductsForViewingHandlerInterface $getOrderProductsForViewingHandler
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, int $contextLanguageId, \PrestaShop\PrestaShop\Core\Localization\Locale $locale, \Context $context, \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider $customerDataProvider, \PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler\GetOrderProductsForViewingHandlerInterface $getOrderProductsForViewingHandler, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, ?\PrestaShop\PrestaShop\Core\Address\AddressFormatterInterface $addressFormatter = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderForViewing $query): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderForViewing
    {
    }
    /**
     * @param \Order $order
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderShippingAddressForViewing
     */
    public function getOrderShippingAddress(\Order $order): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderShippingAddressForViewing
    {
    }
}
