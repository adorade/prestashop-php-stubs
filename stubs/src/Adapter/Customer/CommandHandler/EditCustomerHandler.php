<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\CommandHandler;

/**
 * Handles commands which edits given customer with provided data.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditCustomerHandler extends \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\AbstractCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler\EditCustomerHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing
     * @param string $legacyCookieKey
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing, $legacyCookieKey)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\EditCustomerCommand $command)
    {
    }
}
