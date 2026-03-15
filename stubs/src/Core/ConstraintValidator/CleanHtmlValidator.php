<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Class CleanHtmlValidator is responsible for validating the html content to prevent from having javascript events
 * or script tags.
 */
final class CleanHtmlValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function __construct(bool $allowEmbeddableHtml)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
