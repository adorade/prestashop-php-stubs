<?php

namespace PrestaShop\PrestaShop\Adapter\Language\CommandHandler;

/**
 * Deletes language using legacy object model
 *
 * @internal
 */
final class DeleteLanguageHandler extends \PrestaShop\PrestaShop\Adapter\Language\CommandHandler\AbstractLanguageHandler implements \PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler\DeleteLanguageHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\DeleteLanguageCommand $command)
    {
    }
}
