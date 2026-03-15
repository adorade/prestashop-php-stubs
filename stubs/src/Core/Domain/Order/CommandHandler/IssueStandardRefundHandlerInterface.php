<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles issuing standard refund for given order
 */
interface IssueStandardRefundHandlerInterface
{
    /**
     * @param IssueStandardRefundCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\IssueStandardRefundCommand $command): void;
}
