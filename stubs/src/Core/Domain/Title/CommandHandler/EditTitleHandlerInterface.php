<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler;

/**
 * Defines contract for EditTitleHandler
 */
interface EditTitleHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Title\Command\EditTitleCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\EditTitleCommand $command): void;
}
