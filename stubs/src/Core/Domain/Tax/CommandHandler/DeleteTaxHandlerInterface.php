<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler;

/**
 * Defines contract for DeleteTaxHandler
 */
interface DeleteTaxHandlerInterface
{
    /**
     * @param DeleteTaxCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\DeleteTaxCommand $command);
}
