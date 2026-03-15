<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

/**
 * Defines contract for ToggleCarrierIsFreeHandler
 */
interface ToggleCarrierIsFreeHandlerInterface
{
    /**
     * @param ToggleCarrierIsFreeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\ToggleCarrierIsFreeCommand $command);
}
