<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\CommandHandler;

/**
 * Handles guest to customer transformation command
 *
 * @internal
 */
final class TransformGuestToCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler\TransformGuestToCustomerHandlerInterface
{
    /**
     * @param int $contextLangId
     */
    public function __construct($contextLangId)
    {
    }
    /**
     * @param TransformGuestToCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\TransformGuestToCustomerCommand $command)
    {
    }
}
