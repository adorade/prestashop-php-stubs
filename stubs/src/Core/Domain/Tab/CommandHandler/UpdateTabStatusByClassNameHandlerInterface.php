<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tab\CommandHandler;

interface UpdateTabStatusByClassNameHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tab\Command\UpdateTabStatusByClassNameCommand $command): void;
}
