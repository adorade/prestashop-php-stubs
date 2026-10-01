<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\CommandHandler;

interface EditEmailBodyTemplateHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\MailTemplate\Command\EditEmailBodyTemplateCommand $command): void;
}
