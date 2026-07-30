<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\CommandHandler;

/**
 * Bulk toggles carriers status
 */
class BulkToggleCarrierStatusHandler extends \PrestaShop\PrestaShop\Adapter\Carrier\AbstractCarrierHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler\BulkToggleCarrierStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\BulkToggleCarrierStatusCommand $command)
    {
    }
}
