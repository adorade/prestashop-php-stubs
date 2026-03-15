<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\QueryHandler;

interface GetEmployeeEmailByIdHandlerInterface
{
    /**
     * @param GetEmployeeEmailById $query
     *
     * @return Email
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Query\GetEmployeeEmailById $query): \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email;
}
