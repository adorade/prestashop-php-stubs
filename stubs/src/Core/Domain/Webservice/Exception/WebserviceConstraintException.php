<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\Exception;

/**
 * Is thrown when some constraint is violated in Webservice subdomain
 */
class WebserviceConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Webservice\Exception\WebserviceException
{
    /**
     * @var int Code is used when invalid webservice key is encountered
     */
    public const INVALID_KEY = 1;
}
