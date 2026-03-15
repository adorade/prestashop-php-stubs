<?php

namespace PrestaShopBundle\Form\Validator\Constraints;

class TinyMceMaxLength extends \Symfony\Component\Validator\Constraint
{
    public const TOO_LONG_ERROR_CODE = 'TOO_LONG_ERROR_CODE';
    public $max;
    /**
     * @var string|null
     */
    public $message;
    public function __construct($options = null)
    {
    }
    public function validatedBy(): string
    {
    }
}
