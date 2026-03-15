<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee\QueryHandler;

final class GetEmployeeEmailByIdHandler extends \PrestaShop\PrestaShop\Adapter\Profile\Employee\AbstractEmployeeHandler implements \PrestaShop\PrestaShop\Core\Domain\Employee\QueryHandler\GetEmployeeEmailByIdHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Query\GetEmployeeEmailById $query): \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email
    {
    }
}
