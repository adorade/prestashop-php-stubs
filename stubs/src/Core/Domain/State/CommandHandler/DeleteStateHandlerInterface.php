<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\CommandHandler;

/**
 * Defines contract for DeleteStateHandler
 */
interface DeleteStateHandlerInterface
{
    /**
     * @param DeleteStateCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\DeleteStateCommand $command): void;
}
