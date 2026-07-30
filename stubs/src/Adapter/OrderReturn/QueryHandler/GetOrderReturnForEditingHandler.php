<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\QueryHandler;

/**
 * Handles query which gets order return for editing
 */
class GetOrderReturnForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryHandler\GetOrderReturnForEditingHandlerInterface
{
    /**
     * GetOrderReturnForEditingHandler constructor.
     *
     * @param OrderReturnRepository $orderReturnRepository
     * @param CustomerRepository $customerRepository
     * @param OrderRepository $orderRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository, \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository $customerRepository, \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderRepository $orderRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Query\GetOrderReturnForEditing $query): \PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryResult\OrderReturnForEditing
    {
    }
}
