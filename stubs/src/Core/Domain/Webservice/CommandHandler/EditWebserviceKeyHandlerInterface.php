<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\CommandHandler;

/**
 * Interface for service that handles
 */
interface EditWebserviceKeyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Webservice\Command\EditWebserviceKeyCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Command\EditWebserviceKeyCommand $command);
}
