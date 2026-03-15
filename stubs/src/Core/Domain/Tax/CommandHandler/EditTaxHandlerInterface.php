<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler;

/**
 * Defines contract for EditTaxHandler
 */
interface EditTaxHandlerInterface
{
    /**
     * @param EditTaxCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\EditTaxCommand $command);
}
