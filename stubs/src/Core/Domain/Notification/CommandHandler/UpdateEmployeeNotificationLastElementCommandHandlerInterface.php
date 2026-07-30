<?php

namespace PrestaShop\PrestaShop\Core\Domain\Notification\CommandHandler;

/**
 * Interface for service that handles ACK employee notifications last elements
 */
interface UpdateEmployeeNotificationLastElementCommandHandlerInterface
{
    /**
     * @param UpdateEmployeeNotificationLastElementCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Notification\Command\UpdateEmployeeNotificationLastElementCommand $command);
}
