<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\CommandHandler;

/**
 * Interface for services that handles command which adds new language
 */
interface AddLanguageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\Command\AddLanguageCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId Added language's identity
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Language\Command\AddLanguageCommand $command);
}
