<?php

namespace PrestaShop\PrestaShop\Adapter\Title\CommandHandler;

/**
 * Handles command that delete title
 */
class DeleteTitleHandler implements \PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler\DeleteTitleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\DeleteTitleCommand $command): void
    {
    }
}
