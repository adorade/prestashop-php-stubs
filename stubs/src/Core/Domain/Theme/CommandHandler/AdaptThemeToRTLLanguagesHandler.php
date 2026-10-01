<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Class AdaptThemeToRTLLanguagesHandler
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AdaptThemeToRTLLanguagesHandler implements \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\AdaptThemeToRTLLanguagesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\RTL\StyleSheetProcessorFactoryInterface $stylesheetProcessorFactory
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
