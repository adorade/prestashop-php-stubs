<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkChangeOrderStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\BulkChangeOrderStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Command\BulkChangeOrderStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\BulkChangeOrderStatusCommand $command)
    {
    }
}
