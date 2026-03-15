<?php

namespace PrestaShop\PrestaShop\Adapter\MailTemplate;

/**
 * Class MailPartialTemplateRenderer renders partial mail templates (especially for order). This
 * feature was moved in this service so that it can be shared between PaymentModule and MailPreviewVariablesBuilder.
 */
class MailPartialTemplateRenderer
{
    /**
     * @param Smarty $smarty
     */
    public function __construct(\Smarty $smarty)
    {
    }
    /**
     * Fetch the content of $partialTemplateName inside the folder
     * current_theme/mails/current_iso_lang/ if found, otherwise in
     * mails/current_iso_lang.
     *
     * @param string $partialTemplateName template name with extension
     * @param LanguageInterface $language
     * @param array $variables sent to smarty as 'list'
     * @param bool $cleanComments
     *
     * @return string
     */
    public function render($partialTemplateName, \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language, array $variables = [], $cleanComments = false)
    {
    }
}
