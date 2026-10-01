<?php

namespace PrestaShopBundle\ApiPlatform\Exception;

/**
 * Is thrown when the CQRS query property is not defined on a resource on which it should be.
 */
class CQRSQueryNotFoundException extends \ApiPlatform\Exception\InvalidResourceException
{
}
