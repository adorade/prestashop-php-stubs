<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\CommandHandler;

interface AddStateHandlerInterface
{
    /**
     * @param AddStateCommand $command
     *
     * @return StateId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\AddStateCommand $command): \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId;
}
