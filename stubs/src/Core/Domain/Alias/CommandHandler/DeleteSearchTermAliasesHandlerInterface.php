<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\CommandHandler;

/**
 * Defines contract to handle @see DeleteSearchTermAliasesCommand
 */
interface DeleteSearchTermAliasesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\Command\DeleteSearchTermAliasesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Command\DeleteSearchTermAliasesCommand $command): void;
}
