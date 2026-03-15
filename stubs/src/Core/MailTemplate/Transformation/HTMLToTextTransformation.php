<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate\Transformation;

/**
 * HTMLTextifyTransformation is used to remove any HTML tags from the template. It
 * is especially useful when no txt layout is defined and the renderer uses the html
 * layout as a base. This transformation then removes any html tags but keep the raw
 * information.
 */
class HTMLToTextTransformation extends \PrestaShop\PrestaShop\Core\MailTemplate\Transformation\AbstractTransformation
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
