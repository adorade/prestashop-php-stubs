<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Class ImportThemeHandler
 */
final class ImportThemeHandler implements \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\ImportThemeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeUploaderInterface $themeUploader
     * @param \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeUploaderInterface $themeUploader, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\ImportThemeCommand $command)
    {
    }
}
