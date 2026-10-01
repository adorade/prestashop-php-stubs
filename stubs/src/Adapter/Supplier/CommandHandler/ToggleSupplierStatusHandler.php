<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler;

/**
 * Class ToggleSupplierStatusHandler is responsible for toggling supplier status.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class ToggleSupplierStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Supplier\CommandHandler\ToggleSupplierStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Supplier\Command\ToggleSupplierStatusCommand $command)
    {
    }
}
