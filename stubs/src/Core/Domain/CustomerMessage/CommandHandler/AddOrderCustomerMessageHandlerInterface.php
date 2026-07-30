<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerMessage\CommandHandler;

/**
 * Interface AddOrderCustomerMessageHandlerInterface
 */
interface AddOrderCustomerMessageHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerMessage\Command\AddOrderCustomerMessageCommand $command);
}
