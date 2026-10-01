<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\QueryHandler;

interface GetEmployeeEmailByIdHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\Query\GetEmployeeEmailById $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Query\GetEmployeeEmailById $query): \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email;
}
