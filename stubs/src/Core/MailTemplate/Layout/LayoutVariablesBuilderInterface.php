<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate\Layout;

/**
 * LayoutVariablesBuilderInterface is used by the MailTemplateRendererInterface
 * to render the mails, it returns an array of generic layout variables like:
 *  - templateModuleName: name of the associated module
 *  - languageIsRTL: is the language read from Right To Left
 *  - locale: the locale in which the template is generated
 *  - emailPublicWebRoot: public mail root for assets
 */
interface LayoutVariablesBuilderInterface
{
    public const BUILD_MAIL_LAYOUT_VARIABLES_HOOK = 'actionBuildMailLayoutVariables';
    /**
     * @param LayoutInterface $layout
     * @param LanguageInterface $language
     *
     * @return array
     */
    public function buildVariables(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout, \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language);
}
