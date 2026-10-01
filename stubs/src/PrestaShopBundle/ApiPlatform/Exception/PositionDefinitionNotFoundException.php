<?php

namespace PrestaShopBundle\ApiPlatform\Exception;

/**
 * Is thrown when the positionDefinition property is not defined on a resource on which it should be.
 */
class PositionDefinitionNotFoundException extends \ApiPlatform\Exception\InvalidResourceException
{
}
