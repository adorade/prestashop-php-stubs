<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * Interface for service that handles replying to customer thread
 */
interface ReplyToCustomerThreadHandlerInterface
{
    /**
     * @param ReplyToCustomerThreadCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\ReplyToCustomerThreadCommand $command);
}
