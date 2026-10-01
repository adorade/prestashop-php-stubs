<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Exception;

/**
 * Thrown when the BO "Validation" textarea references a constraint name that is not part of the
 * ExtraPropertyConstraintGrammar allowlist.
 *
 * Surfaces typos and unsupported constraints to the user instead of silently dropping them.
 */
class UnknownExtraPropertyConstraintException extends \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\ExtraPropertyException
{
}
