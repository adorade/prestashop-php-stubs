<?php

namespace PrestaShop\PrestaShop\Adapter\Title\CommandHandler;

/**
 * Handles command that delete title
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteTitleHandler extends \PrestaShop\PrestaShop\Adapter\Title\AbstractTitleHandler implements \PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler\DeleteTitleHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\CannotDeleteTitleException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\DeleteTitleCommand $command): void
    {
    }
}
