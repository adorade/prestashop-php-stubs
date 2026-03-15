<?php

namespace PrestaShop\PrestaShop\Adapter\Tax\CommandHandler;

/**
 * Handles command which deletes Tax using legacy object model
 */
final class DeleteTaxHandler extends \PrestaShop\PrestaShop\Adapter\Tax\AbstractTaxHandler implements \PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler\DeleteTaxHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\DeleteTaxCommand $command)
    {
    }
}
