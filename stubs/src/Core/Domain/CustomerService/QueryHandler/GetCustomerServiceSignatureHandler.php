<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCustomerServiceSignatureHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler\GetCustomerServiceSignatureHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
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
