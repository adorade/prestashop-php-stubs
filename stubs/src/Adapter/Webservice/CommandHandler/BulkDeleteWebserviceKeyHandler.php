<?php

namespace PrestaShop\PrestaShop\Adapter\Webservice\CommandHandler;

/**
 * Handles command that bulk delete webservices
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteWebserviceKeyHandler extends \PrestaShop\PrestaShop\Adapter\Webservice\CommandHandler\AbstractWebserviceKeyHandler implements \PrestaShop\PrestaShop\Core\Domain\Webservice\CommandHandler\BulkDeleteWebserviceKeyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyEraser $webserviceKeyEraser
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyEraser $webserviceKeyEraser)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Command\BulkDeleteWebserviceKeyCommand $command): void
    {
    }
}
