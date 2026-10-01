<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\QueryHandler;

interface GetEmailBodyTemplateForEditingHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\MailTemplate\Query\GetEmailBodyTemplateForEditing $query): \PrestaShop\PrestaShop\Core\Domain\MailTemplate\QueryResult\EditableEmailBodyTemplate;
}
