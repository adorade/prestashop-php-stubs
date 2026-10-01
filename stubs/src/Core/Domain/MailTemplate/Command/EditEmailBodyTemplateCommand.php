<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\Command;

class EditEmailBodyTemplateCommand
{
    public function __construct(string $templateName, private readonly string $locale, string $source, string $moduleName, private readonly string $htmlContent, private readonly string $txtContent)
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
    public function getHtmlContent(): string
    {
    }
    public function getTxtContent(): string
    {
    }
}
