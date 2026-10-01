<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\CommandHandler;

interface AddTagCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\AddTagCommand $command): \PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId;
}
