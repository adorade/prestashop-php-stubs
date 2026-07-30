<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\CommandHandler;

/**
 * Interface GenerateThemeMailsHandlerInterface
 */
interface GenerateThemeMailTemplatesCommandHandlerInterface
{
    /**
     * @param GenerateThemeMailTemplatesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\MailTemplate\Command\GenerateThemeMailTemplatesCommand $command);
}
