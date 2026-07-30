<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\CommandHandler;

interface EditStateHandlerInterface
{
    /**
     * @param EditStateCommand $command
     *
     * @return void
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\EditStateCommand $command): void;
}
