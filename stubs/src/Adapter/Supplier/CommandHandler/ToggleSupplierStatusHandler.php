<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Class ToggleSupplierStatusHandler is responsible for toggling supplier status.
 */
final class ToggleSupplierStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler\ToggleSupplierStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SupplierException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\ToggleSupplierStatusCommand $command)
    {
    }
}
