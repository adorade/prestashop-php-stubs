<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * Parses the "one value per line" enum_values textarea of the definition form into the list the
 * CQRS commands expect. Shared by the form-level validation (ExtraPropertyDefinitionType) and
 * the data handler so both read the SAME values from the same raw string.
 */
class EnumValuesParser
{
    /**
     * @param mixed $rawValue the raw textarea value (anything but a non-blank string reads as "no values")
     *
     * @return list<string>|null the trimmed non-empty lines, or null when there are none
     */
    public static function parse(mixed $rawValue): ?array
    {
    }
}
