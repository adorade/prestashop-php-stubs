<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\CommandHandler;

interface EditTagCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\EditTagCommand $command): void;
}
