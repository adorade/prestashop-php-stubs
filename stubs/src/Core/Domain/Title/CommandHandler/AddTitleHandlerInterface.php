<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler;

/**
 * Defines contract for AddTitleHandler
 */
interface AddTitleHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Title\Command\AddTitleCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\AddTitleCommand $command): \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\TitleId;
}
