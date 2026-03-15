<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler;

/**
 * Describes add feature value command handler
 */
interface AddFeatureValueHandlerInterface
{
    /**
     * @param AddFeatureValueCommand $command
     *
     * @return FeatureValueId id of the created feature
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\AddFeatureValueCommand $command): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId;
}
