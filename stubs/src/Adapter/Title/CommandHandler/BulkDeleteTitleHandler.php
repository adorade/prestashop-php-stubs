<?php

namespace PrestaShop\PrestaShop\Adapter\Title\CommandHandler;

/**
 * Handles command that bulk delete titles
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteTitleHandler extends \PrestaShop\PrestaShop\Adapter\Title\AbstractTitleHandler implements \PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler\BulkDeleteTitleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\BulkDeleteTitleCommand $command): void
    {
    }
}
