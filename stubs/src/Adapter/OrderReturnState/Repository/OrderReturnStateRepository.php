<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturnState\Repository;

class OrderReturnStateRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * Gets legacy OrderReturnState
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderReturnStateId
     *
     * @return \OrderReturnState
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderReturnStateId): \OrderReturnState
    {
    }
}
