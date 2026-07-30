<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\CommandHandler;

/**
 * Handles command that deletes carrier
 */
class DeleteCarrierHandler extends \PrestaShop\PrestaShop\Adapter\Carrier\AbstractCarrierHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler\DeleteCarrierHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\DeleteCarrierCommand $command)
    {
    }
}
