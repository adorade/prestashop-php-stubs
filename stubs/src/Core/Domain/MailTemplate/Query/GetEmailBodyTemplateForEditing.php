<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\Query;

class GetEmailBodyTemplateForEditing
{
    public function __construct(string $templateName, private readonly string $locale, string $source, string $moduleName = '')
    {
    }
    public function getTemplateName(): \PrestaShop\PrestaShop\Core\Domain\MailTemplate\ValueObject\EmailTemplateName
    {
    }
    public function getLocale(): string
    {
    }
    public function getSource(): \PrestaShop\PrestaShop\Core\Domain\MailTemplate\ValueObject\EmailTemplateSource
    {
    }
}
