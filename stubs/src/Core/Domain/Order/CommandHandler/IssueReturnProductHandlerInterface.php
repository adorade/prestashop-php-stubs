<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles issuing return product for given order
 */
interface IssueReturnProductHandlerInterface
{
    /**
     * @param IssueReturnProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\IssueReturnProductCommand $command): void;
}
