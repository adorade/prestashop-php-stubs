<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Exception;

/**
 * Is thrown when State constraint is violated
 */
class StateConstraintException extends \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateException
{
    public const INVALID_ID = 1;
}
