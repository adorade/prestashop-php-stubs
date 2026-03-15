<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Payment\CommandHandler;

/**
 * Interface for service that handles adding payment for order.
 */
interface AddPaymentHandlerInterface
{
    /**
     * @param AddPaymentCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Payment\Command\AddPaymentCommand $command);
}
