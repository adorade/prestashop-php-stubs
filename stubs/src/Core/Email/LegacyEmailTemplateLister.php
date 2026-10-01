<?php

namespace PrestaShop\PrestaShop\Core\Email;

/**
 * Scans and lists legacy email templates (HTML/TXT files) from /mails/{language}/ and /modules/{modulename}/mails/{language}/
 */
class LegacyEmailTemplateLister
{
    public function __construct(string $mailsDir = _PS_MAIL_DIR_, string $modulesDir = _PS_MODULE_DIR_)
    {
    }
    /**
     * @return array ['template_name' => ['module' => '', 'is_core' => true, ...], ...]
     */
    public function getLegacyTemplates(string $isoCode): array
    {
    }
}
