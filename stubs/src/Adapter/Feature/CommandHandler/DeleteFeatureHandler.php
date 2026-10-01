<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteFeatureHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler\DeleteFeatureHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\DeleteFeatureCommand $command): void
    {
    }
}
