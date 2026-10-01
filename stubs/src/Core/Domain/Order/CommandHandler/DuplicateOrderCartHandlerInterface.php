<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles duplicating order cart
 */
interface DuplicateOrderCartHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Command\DuplicateOrderCartCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId Duplicated cart id
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\DuplicateOrderCartCommand $command);
}
