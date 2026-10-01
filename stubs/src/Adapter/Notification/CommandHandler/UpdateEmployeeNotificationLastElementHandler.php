<?php

namespace PrestaShop\PrestaShop\Adapter\Notification\CommandHandler;

/**
 * Handle update employee's last notification element of a given type
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class UpdateEmployeeNotificationLastElementHandler implements \PrestaShop\PrestaShop\Core\Domain\Notification\CommandHandler\UpdateEmployeeNotificationLastElementCommandHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Notification\Command\UpdateEmployeeNotificationLastElementCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Notification\Command\UpdateEmployeeNotificationLastElementCommand $command)
    {
    }
}
