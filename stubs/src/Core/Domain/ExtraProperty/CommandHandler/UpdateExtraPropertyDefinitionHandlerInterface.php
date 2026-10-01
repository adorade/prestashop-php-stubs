<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\CommandHandler;

/**
 * Handler contract for UpdateExtraPropertyDefinitionCommand.
 */
interface UpdateExtraPropertyDefinitionHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\UpdateExtraPropertyDefinitionCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\UpdateExtraPropertyDefinitionCommand $command): void;
}
