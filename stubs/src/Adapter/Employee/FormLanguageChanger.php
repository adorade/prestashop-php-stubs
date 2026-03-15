<?php

namespace PrestaShop\PrestaShop\Adapter\Employee;

/**
 * Class FormLanguageChanger is responsible for changing the language,
 * which is used in forms by the employee.
 * It is not the language in which form texts are translated, but rather
 * the language, which is selected by default in the translatable fields.
 */
final class FormLanguageChanger implements \PrestaShop\PrestaShop\Core\Employee\FormLanguageChangerInterface
{
    /**
     * @param LegacyContext $legacyContext
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function changeLanguageInCookies($languageIsoCode)
    {
    }
}
