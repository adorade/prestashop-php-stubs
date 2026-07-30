<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler;

/**
 * Defines contract for AddTaxHandler
 */
interface AddTaxHandlerInterface
{
    /**
     * @param AddTaxCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\AddTaxCommand $command);
}
