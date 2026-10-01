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
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\CannotAddStateException
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\AddStateCommand $command): \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId
    {
    }
}
