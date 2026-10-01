<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler;

/**
 * Interface for service that implements edit language command handling
 */
interface EditLanguageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\Command\EditLanguageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\EditLanguageCommand $command);
}
