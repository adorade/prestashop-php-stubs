<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler;

/**
 * Interface for service that deletes language
 */
interface DeleteLanguageHandlerInterface
{
    /**
     * @param DeleteLanguageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\DeleteLanguageCommand $command);
}
