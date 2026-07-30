<?php

namespace PrestaShop\PrestaShop\Adapter\Language\CommandHandler;

/**
 * Toggles multiple languages status using legacy Language object model
 *
 * @internal
 */
final class BulkToggleLanguagesStatusHandler extends \PrestaShop\PrestaShop\Adapter\Language\CommandHandler\AbstractLanguageHandler implements \PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler\BulkToggleLanguagesStatusHandlerInterface
{
    /**
     * @param RobotsTextFileGenerator $robotsTextFileGenerator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\File\RobotsTextFileGenerator $robotsTextFileGenerator)
    {
    }
    /**
     * @param BulkToggleLanguagesStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\BulkToggleLanguagesStatusCommand $command)
    {
    }
}
