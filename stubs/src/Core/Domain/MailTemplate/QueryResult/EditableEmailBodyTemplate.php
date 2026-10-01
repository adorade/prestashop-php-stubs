<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\QueryResult;

class EditableEmailBodyTemplate
{
    public function __construct(private readonly string $templateName, private readonly string $locale, private readonly string $source, private readonly string $moduleName, private readonly ?string $htmlContent, private readonly ?string $txtContent)
    {
    }
    public function getTemplateName(): string
    {
    }
    public function getLocale(): string
    {
    }
    public function getSource(): string
    {
    }
    public function getModuleName(): string
    {
    }
    public function getHtmlContent(): ?string
    {
    }
    public function getTxtContent(): ?string
    {
    }
}
