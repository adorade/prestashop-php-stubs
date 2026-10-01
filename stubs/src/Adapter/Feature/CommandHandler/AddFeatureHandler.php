<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\CommandHandler;

/**
 * Handles adding of features using legacy logic.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddFeatureHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler\AddFeatureHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\AddFeatureCommand $command): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
    {
    }
}
