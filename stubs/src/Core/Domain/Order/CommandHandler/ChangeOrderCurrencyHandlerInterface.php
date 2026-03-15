<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles changing order currency.
 */
interface ChangeOrderCurrencyHandlerInterface
{
    /**
     * @param ChangeOrderCurrencyCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\ChangeOrderCurrencyCommand $command);
}
