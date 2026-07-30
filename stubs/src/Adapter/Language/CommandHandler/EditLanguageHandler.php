<?php

namespace PrestaShop\PrestaShop\Adapter\Language\CommandHandler;

/**
 * Handles command which edits language using legacy object model
 *
 * @internal
 */
final class EditLanguageHandler extends \PrestaShop\PrestaShop\Adapter\Language\CommandHandler\AbstractLanguageHandler implements \PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler\EditLanguageHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Image\ImageValidator $imageValidator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\EditLanguageCommand $command)
    {
    }
}
