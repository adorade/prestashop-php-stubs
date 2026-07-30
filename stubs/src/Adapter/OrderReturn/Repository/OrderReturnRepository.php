<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\Repository;

class OrderReturnRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param OrderReturnValidator $orderReturnValidator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Validator\OrderReturnValidator $orderReturnValidator)
    {
    }
    /**
     * Gets legacy OrderReturn
     *
     * @param OrderReturnId $orderReturnId
     *
     * @return OrderReturn
     *
     * @throws OrderReturnException
     * @throws CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId): \OrderReturn
    {
    }
    /**
     * @param OrderReturn $orderReturn
     *
     * @throws CoreException
     */
    public function update(\OrderReturn $orderReturn): void
    {
    }
}
