<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class ResendOrderEmailHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ResendOrderEmailHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Command\ResendOrderEmailCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\ResendOrderEmailCommand $command): void
    {
    }
}
