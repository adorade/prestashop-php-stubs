<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\CommandHandler;

/**
 * Defines contract for BulkDeleteWebserviceHandler
 */
interface BulkDeleteWebserviceKeyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Webservice\Command\BulkDeleteWebserviceKeyCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Command\BulkDeleteWebserviceKeyCommand $command): void;
}
