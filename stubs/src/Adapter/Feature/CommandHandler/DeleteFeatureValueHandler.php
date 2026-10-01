<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteFeatureValueHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler\DeleteFeatureValueHandlerInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\DeleteFeatureValueCommand $command): void
    {
    }
}
