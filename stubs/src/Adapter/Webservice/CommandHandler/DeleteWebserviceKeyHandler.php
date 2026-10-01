<?php

namespace PrestaShop\PrestaShop\Adapter\Webservice\CommandHandler;

/**
 * Handles command that delete webservice
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteWebserviceKeyHandler extends \PrestaShop\PrestaShop\Adapter\Webservice\CommandHandler\AbstractWebserviceKeyHandler implements \PrestaShop\PrestaShop\Core\Domain\Webservice\CommandHandler\DeleteWebserviceKeyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyEraser $webserviceKeyEraser
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Webservice\WebserviceKeyEraser $webserviceKeyEraser)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Webservice\Exception\CannotDeleteWebserviceException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Webservice\Command\DeleteWebserviceKeyCommand $command): void
    {
    }
}
