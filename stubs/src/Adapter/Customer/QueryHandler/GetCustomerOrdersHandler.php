<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\QueryHandler;

/**
 * Handles GetCustomerOrders query using legacy object models
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCustomerOrdersHandler extends \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\AbstractCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler\GetCustomerOrdersHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerOrders $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\OrderSummary[]
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerOrders $query): array
    {
    }
}
