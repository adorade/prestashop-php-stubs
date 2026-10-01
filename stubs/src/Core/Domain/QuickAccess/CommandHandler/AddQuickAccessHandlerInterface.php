<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\CommandHandler;

interface AddQuickAccessHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command\AddQuickAccessCommand $command): \PrestaShop\PrestaShop\Core\Domain\QuickAccess\ValueObject\QuickAccessId;
}
