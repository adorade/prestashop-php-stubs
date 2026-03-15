<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

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
