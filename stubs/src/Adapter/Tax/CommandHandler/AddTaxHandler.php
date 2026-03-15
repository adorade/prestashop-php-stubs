<?php

namespace PrestaShop\PrestaShop\Adapter\Tax\CommandHandler;

/**
 * Handles command which is responsible for tax editing
 */
final class AddTaxHandler extends \PrestaShop\PrestaShop\Adapter\Tax\AbstractTaxHandler implements \PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler\AddTaxHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws TaxException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\AddTaxCommand $command)
    {
    }
}
