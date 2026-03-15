<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\CommandHandler;

/**
 * Handles command that toggle carrier status
 */
class ToggleCarrierStatusHandler extends \PrestaShop\PrestaShop\Adapter\Carrier\AbstractCarrierHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler\ToggleCarrierStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\ToggleCarrierStatusCommand $command)
    {
    }
}
