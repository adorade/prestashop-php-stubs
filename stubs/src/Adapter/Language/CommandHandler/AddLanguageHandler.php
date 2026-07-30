<?php

namespace PrestaShop\PrestaShop\Adapter\Language\CommandHandler;

/**
 * Handles command which adds new language using legacy object model
 *
 * @internal
 */
final class AddLanguageHandler extends \PrestaShop\PrestaShop\Adapter\Language\CommandHandler\AbstractLanguageHandler implements \PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler\AddLanguageHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Image\ImageValidator $imageValidator, \PrestaShop\PrestaShop\Adapter\File\RobotsTextFileGenerator $robotsTextFileGenerator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\AddLanguageCommand $command)
    {
    }
}
