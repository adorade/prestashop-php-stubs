<?php

namespace PrestaShop\PrestaShop\Adapter\State\CommandHandler;

/**
 * Handles command that delete state
 */
class DeleteStateHandler implements \PrestaShop\PrestaShop\Core\Domain\State\CommandHandler\DeleteStateHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\DeleteStateCommand $command): void
    {
    }
}
