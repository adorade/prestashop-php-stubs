<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler;

interface BulkDeleteDiscountsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Discount\Command\BulkDeleteDiscountsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\BulkDeleteDiscountsCommand $command): void;
}
