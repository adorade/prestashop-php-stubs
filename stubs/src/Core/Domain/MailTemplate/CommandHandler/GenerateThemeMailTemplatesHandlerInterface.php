<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\CommandHandler;

/**
 * Interface GenerateThemeMailTemplatesHandlerInterface
 */
interface GenerateThemeMailTemplatesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\MailTemplate\Command\GenerateThemeMailTemplatesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\MailTemplate\Command\GenerateThemeMailTemplatesCommand $command);
}
