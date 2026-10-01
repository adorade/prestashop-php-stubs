<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class NotBlankWhenRequired extends \Symfony\Component\Validator\Constraints\NotBlank
{
    public $required;
    public function validatedBy()
    {
    }
    public function getRequiredOptions()
    {
    }
}
