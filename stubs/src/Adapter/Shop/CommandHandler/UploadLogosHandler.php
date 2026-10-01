<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\CommandHandler;

/**
 * Class UploadLogosHandler
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class UploadLogosHandler implements \PrestaShop\PrestaShop\Core\Domain\Shop\CommandHandler\UploadLogosHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Core\Shop\LogoUploader $logoUploader
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Shop\LogoUploader $logoUploader, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\FileUploadException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shop\Command\UploadLogosCommand $command)
    {
    }
}
