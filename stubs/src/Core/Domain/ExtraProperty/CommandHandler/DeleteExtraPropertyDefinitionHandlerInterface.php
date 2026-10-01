<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\CommandHandler;

/**
 * Handler contract for DeleteExtraPropertyDefinitionCommand.
 */
interface DeleteExtraPropertyDefinitionHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\DeleteExtraPropertyDefinitionCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\DeleteExtraPropertyDefinitionCommand $command): void;
}
