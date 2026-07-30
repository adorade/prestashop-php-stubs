<?php

namespace PrestaShop\PrestaShop\Adapter\Webservice\CommandHandler;

/**
 * Handles command that adds new webservice key for PrestaShop's API
 *
 * @internal
 */
final class AddWebserviceKeyHandler extends \PrestaShop\PrestaShop\Adapter\Webservice\CommandHandler\AbstractWebserviceKeyHandler implements \PrestaShop\PrestaShop\Core\Domain\Webservice\CommandHandler\AddWebserviceKeyHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Command\AddWebserviceKeyCommand $command)
    {
    }
}
