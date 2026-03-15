<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class ResendOrderEmailHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ResendOrderEmailHandlerInterface
{
    /**
     * @param ResendOrderEmailCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\ResendOrderEmailCommand $command): void
    {
    }
}
