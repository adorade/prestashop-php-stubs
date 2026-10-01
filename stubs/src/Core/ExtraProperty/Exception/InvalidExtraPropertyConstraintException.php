<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Exception;

/**
 * Thrown when a BO "Validation" textarea entry is recognized by name but malformed or carries an
 * invalid argument (e.g. a required value is missing, or a value is supplied to a constraint that
 * takes none).
 *
 * Distinct from UnknownExtraPropertyConstraintException, which covers an unrecognized name.
 */
class InvalidExtraPropertyConstraintException extends \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\ExtraPropertyException
{
}
