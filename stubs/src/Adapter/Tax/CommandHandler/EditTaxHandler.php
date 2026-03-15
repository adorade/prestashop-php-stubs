<?php

namespace PrestaShop\PrestaShop\Adapter\Tax\CommandHandler;

/**
 * Handles command which is responsible for tax editing
 */
final class EditTaxHandler extends \PrestaShop\PrestaShop\Adapter\Tax\AbstractTaxHandler implements \PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler\EditTaxHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws TaxException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\EditTaxCommand $command)
    {
    }
}
