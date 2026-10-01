<?php

namespace PrestaShop\PrestaShop\Adapter\MailTemplate\QueryHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetEmailBodyTemplateForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\MailTemplate\QueryHandler\GetEmailBodyTemplateForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\MailTemplate\EmailBodyTemplateRepository $repository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\MailTemplate\Query\GetEmailBodyTemplateForEditing $query): \PrestaShop\PrestaShop\Core\Domain\MailTemplate\QueryResult\EditableEmailBodyTemplate
    {
    }
}
