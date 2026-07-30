<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate\Transformation;

/**
 * Class MailVariablesTransformation is used only for preview, it replaces the
 * variables present in the mail templates (this replacement is usually performed
 * by the Mail class in real behavior).
 * You can set the variables using the actionBuildMailLayoutVariables and setting
 * them in the `templateVars` key, or simply via the constructor.
 */
class MailVariablesTransformation extends \PrestaShop\PrestaShop\Core\MailTemplate\Transformation\AbstractTransformation
{
    /**
     * @param string $type
     * @param array $replaceVariables
     *
     * @throws InvalidArgumentException
     */
    public function __construct($type, array $replaceVariables = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function apply($templateContent, array $templateVariables)
    {
    }
}
