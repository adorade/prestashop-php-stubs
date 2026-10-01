<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler;

/**
 * Defines contract for EditTaxHandler
 */
interface EditTaxHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Tax\Command\EditTaxCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\EditTaxCommand $command);
}
