<?php

namespace PrestaShop\PrestaShop\Adapter\Language\CommandHandler;

/**
 * Deletes languages using legacy Language object model
 *
 * @internal
 */
final class BulkDeleteLanguagesHandler extends \PrestaShop\PrestaShop\Adapter\Language\CommandHandler\AbstractLanguageHandler implements \PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler\BulkDeleteLanguagesHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\BulkDeleteLanguagesCommand $command)
    {
    }
}
