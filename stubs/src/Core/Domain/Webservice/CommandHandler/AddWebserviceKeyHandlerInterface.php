<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\CommandHandler;

/**
 * Interface for service that handles adding new webservice key
 */
interface AddWebserviceKeyHandlerInterface
{
    /**
     * @param AddWebserviceKeyCommand $command
     *
     * @return WebserviceKeyId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Command\AddWebserviceKeyCommand $command);
}
