<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class AddPaymentHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\Payment\CommandHandler\AddPaymentHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Payment\Command\AddPaymentCommand $command)
    {
    }
}
