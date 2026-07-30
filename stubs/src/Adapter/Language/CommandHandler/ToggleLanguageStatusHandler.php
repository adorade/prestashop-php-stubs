<?php

namespace PrestaShop\PrestaShop\Adapter\Language\CommandHandler;

/**
 * Enables/disables language using legacy Language object model
 *
 * @internal
 */
final class ToggleLanguageStatusHandler extends \PrestaShop\PrestaShop\Adapter\Language\CommandHandler\AbstractLanguageHandler implements \PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler\ToggleLanguageStatusHandlerInterface
{
    /**
     * @param RobotsTextFileGenerator $robotsTextFileGenerator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\File\RobotsTextFileGenerator $robotsTextFileGenerator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\ToggleLanguageStatusCommand $command)
    {
    }
}
