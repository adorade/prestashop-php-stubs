<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\CommandHandler;

/**
 * Defines contract to handle @see BulkDeleteSearchTermsAliasesCommand
 */
interface BulkDeleteSearchTermsAliasesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\Command\BulkDeleteSearchTermsAliasesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Command\BulkDeleteSearchTermsAliasesCommand $command): void;
}
