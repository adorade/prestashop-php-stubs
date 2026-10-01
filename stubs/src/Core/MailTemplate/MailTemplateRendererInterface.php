<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * MailTemplateRendererInterface is used to render a specific MailLayoutInterface
 * with the specified LanguageInterface.
 */
interface MailTemplateRendererInterface
{
    public const GET_MAIL_LAYOUT_TRANSFORMATIONS = 'actionGetMailLayoutTransformations';
    /**
     * @param \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout
     * @param \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language
     *
     * @return string
     */
    public function renderTxt(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout, \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language);
    /**
     * @param \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout
     * @param \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language
     *
     * @return string
     */
    public function renderHtml(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $layout, \PrestaShop\PrestaShop\Core\Language\LanguageInterface $language);
    /**
     * Adds a transformer to the renderer, when template is rendered all transformers
     * matching its type (html or txt) are applied to the output content.
     *
     * @param \PrestaShop\PrestaShop\Core\MailTemplate\Transformation\TransformationInterface $transformer
     *
     * @return $this
     */
    public function addTransformation(\PrestaShop\PrestaShop\Core\MailTemplate\Transformation\TransformationInterface $transformer);
}
