<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturnState\Repository;

class OrderReturnStateRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * Gets legacy OrderReturnState
     *
     * @param OrderReturnStateId $orderReturnStateId
     *
     * @return OrderReturnState
     *
     * @throws CoreException
     * @throws OrderReturnStateNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderReturnStateId): \OrderReturnState
    {
    }
}
