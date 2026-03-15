<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler;

/**
 * @internal
 */
final class GetCustomerServiceSignatureHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler\GetCustomerServiceSignatureHandlerInterface
{
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Query\GetCustomerServiceSignature $query)
    {
    }
}
