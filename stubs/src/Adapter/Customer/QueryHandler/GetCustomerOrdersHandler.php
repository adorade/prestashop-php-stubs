<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\QueryHandler;

/**
 * Handles GetCustomerOrders query using legacy object models
 */
final class GetCustomerOrdersHandler extends \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\AbstractCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler\GetCustomerOrdersHandlerInterface
{
    /**
     * @param LocaleInterface $locale
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale)
    {
    }
    /**
     * @param GetCustomerOrders $query
     *
     * @return OrderSummary[]
     *
     * @throws CustomerNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerOrders $query): array
    {
    }
}
