<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\CommandHandler;

/**
 * Interface for service that handles adding new webservice key
 */
interface AddWebserviceKeyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Webservice\Command\AddWebserviceKeyCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Webservice\ValueObject\WebserviceKeyId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Command\AddWebserviceKeyCommand $command);
}
