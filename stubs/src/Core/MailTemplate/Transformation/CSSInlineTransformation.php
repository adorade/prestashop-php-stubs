<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate\Transformation;

/**
 * Class CSSInlineTransformation applies a transformation on html templates, it downloads
 * each css files integrated in the template, and then applies them on the html inline-style.
 * This is used for some mail readers which don't load css styles but can interpret them when
 * set inline.
 */
class CSSInlineTransformation extends \PrestaShop\PrestaShop\Core\MailTemplate\Transformation\AbstractTransformation
{
    public function __construct()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function apply($templateContent, array $templateVariables)
    {
    }
}
