<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler;

/**
 * Interface for services that handles command which adds new language
 */
interface AddLanguageHandlerInterface
{
    /**
     * @param AddLanguageCommand $command
     *
     * @return LanguageId Added language's identity
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\AddLanguageCommand $command);
}
