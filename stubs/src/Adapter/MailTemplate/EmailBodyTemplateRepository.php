<?php

namespace PrestaShop\PrestaShop\Adapter\MailTemplate;

class EmailBodyTemplateRepository
{
    public function __construct(private readonly string $coreMailsDir, private readonly string $modulesDir)
    {
    }
    /**
     * @return array<int, array{template_name: string, source: string, module_name: string, has_html: bool, has_txt: bool}>
     */
    public function findAllForLocale(string $locale): array
    {
    }
    /**
     * @return array{html_content: string|null, txt_content: string|null}
     */
    public function findOne(string $name, string $locale, \PrestaShop\PrestaShop\Core\Domain\MailTemplate\ValueObject\EmailTemplateSource $source): array
    {
    }
    public function save(string $name, string $locale, \PrestaShop\PrestaShop\Core\Domain\MailTemplate\ValueObject\EmailTemplateSource $source, string $htmlContent, string $txtContent): void
    {
    }
}
