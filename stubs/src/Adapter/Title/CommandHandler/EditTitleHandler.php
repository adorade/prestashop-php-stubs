<?php

namespace PrestaShop\PrestaShop\Adapter\Title\CommandHandler;

/**
 * Handles edition of title
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditTitleHandler extends \PrestaShop\PrestaShop\Adapter\Title\AbstractTitleHandler implements \PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler\EditTitleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\EditTitleCommand $command): void
    {
    }
}
