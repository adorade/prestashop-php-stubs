<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Defines contract for bulk delete cart handler
 */
interface BulkDeleteCartHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Command\BulkDeleteCartCommand $command
     *
     * @throw CartException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\BulkDeleteCartCommand $command): void;
}
