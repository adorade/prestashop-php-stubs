<?php

namespace PrestaShopBundle\Translation\Constraints;

/**
 * @Annotation
 * @Target({"CLASS", "ANNOTATION"})
 */
class PassVsprintf extends \Symfony\Component\Validator\Constraint
{
    public $message = 'You must specify as many arguments (%d, %s ...) as the original string.';
    public function getTargets()
    {
    }
}
