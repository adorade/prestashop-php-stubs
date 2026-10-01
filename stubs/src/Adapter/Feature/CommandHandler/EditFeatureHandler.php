<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\CommandHandler;

/**
 * Handles feature editing.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditFeatureHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler\EditFeatureHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\EditFeatureCommand $command): void
    {
    }
}
