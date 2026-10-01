<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\CommandHandler;

/**
 * Handler contract for BulkDeleteExtraPropertyDefinitionCommand.
 */
interface BulkDeleteExtraPropertyDefinitionHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\BulkDeleteExtraPropertyDefinitionCommand $command): void;
}
