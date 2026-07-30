<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler;

/**
 * Defines contract for service that handles command which transforms guest into customer
 */
interface TransformGuestToCustomerHandlerInterface
{
    /**
     * @param TransformGuestToCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\TransformGuestToCustomerCommand $command);
}
