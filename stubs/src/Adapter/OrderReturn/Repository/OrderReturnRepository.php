<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\Repository;

class OrderReturnRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\OrderReturn\Validator\OrderReturnValidator $orderReturnValidator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Validator\OrderReturnValidator $orderReturnValidator)
    {
    }
    /**
     * Gets legacy OrderReturn
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId
     *
     * @return \OrderReturn
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId): \OrderReturn
    {
    }
    /**
     * @param \OrderReturn $orderReturn
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function update(\OrderReturn $orderReturn): void
    {
    }
}
