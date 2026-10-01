<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\QueryHandler;

/**
 * Handles finding customer by email
 */
final class GetCustomerForAddressCreationHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler\GetCustomerForAddressCreationHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\AddressCreationCustomerInformation
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerByEmailNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForAddressCreation $query): \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\AddressCreationCustomerInformation
    {
    }
}
