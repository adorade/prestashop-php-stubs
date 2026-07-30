<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\CommandHandler;

/**
 * Bulk deletes carriers
 */
class BulkDeleteCarrierHandler extends \PrestaShop\PrestaShop\Adapter\Carrier\AbstractCarrierHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler\BulkDeleteCarrierHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\BulkDeleteCarrierCommand $command)
    {
    }
}
