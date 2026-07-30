<?php

namespace PrestaShop\PrestaShop\Adapter\MailTemplate;

/**
 * Class MailPreviewVariablesBuilder is used to build fake (but realistic) template variables to preview email templates.
 */
final class MailPreviewVariablesBuilder
{
    public const ORDER_CONFIRMATION = 'order_conf';
    public const DOWNLOAD_PRODUCT = 'download_product';
    public const EMAIL_ALERTS_MODULE = 'ps_emailalerts';
    public const NEW_ORDER = 'new_order';
    public const RETURN_SLIP = 'return_slip';
    /**
     * MailPreviewVariablesBuilder constructor.
     *
     * @param ConfigurationInterface $configuration
     * @param LegacyContext $legacyContext
     * @param ContextEmployeeProviderInterface $employeeProvider
     * @param MailPartialTemplateRenderer $mailPartialTemplateRenderer
     * @param Locale $locale
     * @param TranslatorInterface $translatorComponent
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $employeeProvider, \PrestaShop\PrestaShop\Adapter\MailTemplate\MailPartialTemplateRenderer $mailPartialTemplateRenderer, \PrestaShop\PrestaShop\Core\Localization\Locale $locale, \Symfony\Contracts\Translation\TranslatorInterface $translatorComponent)
    {
    }
    /**
     * @param LayoutInterface $mailLayout
     *
     * @return array
     *
     * @throws \SmartyException
     */
    public function buildTemplateVariables(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $mailLayout)
    {
    }
}
