<?php

namespace PrestaShop\PrestaShop\Adapter\Tax\CommandHandler;

/**
 * Handles command which toggles Tax status using legacy object model
 */
final class ToggleTaxStatusHandler extends \PrestaShop\PrestaShop\Adapter\Tax\AbstractTaxHandler implements \PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler\ToggleTaxStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\ToggleTaxStatusCommand $command)
    {
    }
}
