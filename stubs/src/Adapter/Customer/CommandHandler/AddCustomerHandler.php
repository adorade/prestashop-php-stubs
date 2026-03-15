<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\CommandHandler;

/**
 * Handles command that adds new customer
 *
 * @internal
 */
final class AddCustomerHandler extends \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\AbstractCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler\AddCustomerHandlerInterface
{
    /**
     * @param Hashing $hashing
     * @param string $legacyCookieKey
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing, $legacyCookieKey)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\AddCustomerCommand $command)
    {
    }
}
