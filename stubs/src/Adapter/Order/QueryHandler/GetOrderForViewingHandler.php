<?php

namespace PrestaShop\PrestaShop\Adapter\Order\QueryHandler;

/**
 * Handle getting order for viewing
 *
 * @internal
 */
final class GetOrderForViewingHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler\GetOrderForViewingHandlerInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param int $contextLanguageId
     * @param Locale $locale
     * @param Context $context
     * @param CustomerDataProvider $customerDataProvider
     * @param GetOrderProductsForViewingHandlerInterface $getOrderProductsForViewingHandler
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, int $contextLanguageId, \PrestaShop\PrestaShop\Core\Localization\Locale $locale, \Context $context, \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider $customerDataProvider, \PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler\GetOrderProductsForViewingHandlerInterface $getOrderProductsForViewingHandler, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Core\Address\AddressFormatterInterface $addressFormatter = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderForViewing $query): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderForViewing
    {
    }
    /**
     * @param Order $order
     *
     * @return OrderShippingAddressForViewing
     */
    public function getOrderShippingAddress(\Order $order): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderShippingAddressForViewing
    {
    }
}
