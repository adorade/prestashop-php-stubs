<?php

namespace PrestaShopBundle\ApiPlatform\Exception;

/**
 * Is thrown when the CQRS query property is not defined on a resource on which it should be.
 */
class CQRSCommandNotFoundException extends \ApiPlatform\Exception\InvalidResourceException
{
}
