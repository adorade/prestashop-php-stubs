<?php

namespace PrestaShop\PrestaShop\Adapter\MailTemplate\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditEmailBodyTemplateHandler implements \PrestaShop\PrestaShop\Core\Domain\MailTemplate\CommandHandler\EditEmailBodyTemplateHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\MailTemplate\EmailBodyTemplateRepository $repository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\MailTemplate\Command\EditEmailBodyTemplateCommand $command): void
    {
    }
}
