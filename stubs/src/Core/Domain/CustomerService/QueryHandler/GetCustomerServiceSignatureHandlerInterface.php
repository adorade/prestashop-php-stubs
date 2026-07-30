<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler;

/**
 * Interface for service that gets customer service signature
 */
interface GetCustomerServiceSignatureHandlerInterface
{
    /**
     * @param GetCustomerServiceSignature $query
     *
     * @return string
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Query\GetCustomerServiceSignature $query);
}
