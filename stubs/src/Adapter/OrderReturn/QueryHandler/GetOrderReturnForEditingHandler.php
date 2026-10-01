<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\QueryHandler;

/**
 * Handles query which gets order return for editing
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetOrderReturnForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryHandler\GetOrderReturnForEditingHandlerInterface
{
    /**
     * GetOrderReturnForEditingHandler constructor.
     *
     * @param \PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository
     * @param \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository $customerRepository
     * @param \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderRepository $orderRepository
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
