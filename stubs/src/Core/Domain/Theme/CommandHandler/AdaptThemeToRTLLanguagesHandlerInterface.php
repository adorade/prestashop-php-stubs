<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Interface AdaptThemeToRTLLanguagesHandlerInterface
 */
interface AdaptThemeToRTLLanguagesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Theme\Command\AdaptThemeToRTLLanguagesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\AdaptThemeToRTLLanguagesCommand $command);
}
