<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\CommandHandler;

/**
 * Defines contract for DeleteWebserviceHandler
 */
interface DeleteWebserviceKeyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Webservice\Command\DeleteWebserviceKeyCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Command\DeleteWebserviceKeyCommand $command): void;
}
