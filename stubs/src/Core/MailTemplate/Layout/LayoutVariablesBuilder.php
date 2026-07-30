<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate\Layout;

/**
 * MailLayoutVariablesBuilder is a basic implementation of MailLayoutVariablesBuilderInterface
 *  - it formats the variables for template
 *  - it is able to inject default fonts for specified languages
 *  - it includes default variables (set in the constructor)
 *  - it dispatches a hook to allow overriding its output
 */
class LayoutVariablesBuilder implements \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutVariablesBuilderInterface
{
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param LanguageDefaultFontsCatalog $languageDefaultFonts
     * @param array $defaultVariables
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Language\LanguageDefaultFontsCatalog $languageDefaultFonts, array $defaultVariables = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildVariables(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $mailLayout, \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language)
    {
    }
}
