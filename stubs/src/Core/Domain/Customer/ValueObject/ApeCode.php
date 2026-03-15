<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject;

/**
 * Every business in France is classified under an activity code
 * entitled APE - Activite Principale de l’Entreprise
 */
class ApeCode
{
    /**
     * @var string
     */
    public const PATTERN = '/^[0-9]{1,2}?\.?[0-9]{1,2}[a-zA-Z]{1}$/s';
    /**
     * @param mixed $code
     */
    public function __construct($code)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
