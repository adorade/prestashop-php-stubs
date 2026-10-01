<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Exception;

/**
 * Is thrown when some constraint is violated in Profile subdomain
 */
class ProfileConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Profile\Exception\ProfileException
{
    /**
     * @var int Code is used when invalid profile name is encountered
     */
    public const INVALID_NAME = 1;
}
