<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles issuing partial refund for given order
 */
interface IssuePartialRefundHandlerInterface
{
    /**
     * @param IssuePartialRefundCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\IssuePartialRefundCommand $command): void;
}
