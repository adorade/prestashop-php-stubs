<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Class AdaptThemeToRTLLanguagesHandler
 */
final class AdaptThemeToRTLLanguagesHandler implements \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\AdaptThemeToRTLLanguagesHandlerInterface
{
    /**
     * @param StyleSheetProcessorFactoryInterface $stylesheetProcessorFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\RTL\StyleSheetProcessorFactoryInterface $stylesheetProcessorFactory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\AdaptThemeToRTLLanguagesCommand $command)
    {
    }
}
