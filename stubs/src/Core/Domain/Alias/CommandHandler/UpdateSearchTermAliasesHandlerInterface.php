<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\CommandHandler;

/**
 * Defines contract to handle @see UpdateSearchTermAliasesCommand
 */
interface UpdateSearchTermAliasesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\Command\UpdateSearchTermAliasesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Command\UpdateSearchTermAliasesCommand $command): void;
}
