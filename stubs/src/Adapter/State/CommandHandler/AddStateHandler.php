<?php

namespace PrestaShop\PrestaShop\Adapter\State\CommandHandler;

/**
 * Handles creation of state
 */
class AddStateHandler implements \PrestaShop\PrestaShop\Core\Domain\State\CommandHandler\AddStateHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CannotAddStateException
     * @throws StateConstraintException
     * @throws StateException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\AddStateCommand $command): \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId
    {
    }
}
