<?php

namespace PrestaShop\PrestaShop\Adapter\State\CommandHandler;

/**
 * Handles state editing
 */
class EditStateHandler implements \PrestaShop\PrestaShop\Core\Domain\State\CommandHandler\EditStateHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CannotUpdateStateException
     * @throws StateConstraintException
     * @throws StateException
     * @throws StateNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\EditStateCommand $command): void
    {
    }
}
