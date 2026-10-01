<?php

namespace PrestaShop\PrestaShop\Adapter\State\CommandHandler;

/**
 * Handles state editing
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditStateHandler implements \PrestaShop\PrestaShop\Core\Domain\State\CommandHandler\EditStateHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\CannotUpdateStateException
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateException
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\EditStateCommand $command): void
    {
    }
}
