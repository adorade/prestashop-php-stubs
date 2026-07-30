<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\CommandHandler;

/**
 * Class UploadLogosHandler
 */
final class UploadLogosHandler implements \PrestaShop\PrestaShop\Core\Domain\Shop\CommandHandler\UploadLogosHandlerInterface
{
    /**
     * @param ConfigurationInterface $configuration
     * @param LogoUploader $logoUploader
     * @param HookDispatcherInterface $hookDispatcher
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Shop\LogoUploader $logoUploader, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws ShopException
     * @throws FileUploadException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shop\Command\UploadLogosCommand $command)
    {
    }
}
