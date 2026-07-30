<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler;

/**
 * Defines contract for DeleteTitleHandler
 */
interface DeleteTitleHandlerInterface
{
    /**
     * @param DeleteTitleCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\DeleteTitleCommand $command): void;
}
