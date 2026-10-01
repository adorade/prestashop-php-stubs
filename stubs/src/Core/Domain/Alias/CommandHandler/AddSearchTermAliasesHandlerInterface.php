<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\CommandHandler;

/**
 * Interface for services that handle command which adds new alias
 */
interface AddSearchTermAliasesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\Command\AddSearchTermAliasesCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\AliasId[]
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Command\AddSearchTermAliasesCommand $command): array;
}
