<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Class CleanHtml is responsible for validating the html content to prevent from having javascript events
 * or script tags.
 */
final class CleanHtml extends \Symfony\Component\Validator\Constraint
{
    public $message = '%s is invalid.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
