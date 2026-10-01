<?php

namespace PrestaShop\PrestaShop\Adapter\QuickAccess\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddQuickAccessHandler implements \PrestaShop\PrestaShop\Core\Domain\QuickAccess\CommandHandler\AddQuickAccessHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\QuickAccess\Repository\QuickAccessRepository $repository, private readonly \PrestaShop\PrestaShop\Core\Language\LocalizedNamesFiller $localizedNamesFiller)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command\AddQuickAccessCommand $command): \PrestaShop\PrestaShop\Core\Domain\QuickAccess\ValueObject\QuickAccessId
    {
    }
}
