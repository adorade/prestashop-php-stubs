<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles duplicating order cart
 */
interface DuplicateOrderCartHandlerInterface
{
    /**
     * @param DuplicateOrderCartCommand $command
     *
     * @return CartId Duplicated cart id
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\DuplicateOrderCartCommand $command);
}
