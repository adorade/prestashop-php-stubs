<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\CommandHandler;

/**
 * Handler contract for AddExtraPropertyDefinitionCommand.
 */
interface AddExtraPropertyDefinitionHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\AddExtraPropertyDefinitionCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Command\AddExtraPropertyDefinitionCommand $command): \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId;
}
