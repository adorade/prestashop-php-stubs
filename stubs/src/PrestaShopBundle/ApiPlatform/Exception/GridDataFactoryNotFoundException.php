<?php

namespace PrestaShopBundle\ApiPlatform\Exception;

/**
 * Is thrown when the gridDataFactory property is not defined on a resource on which it should be.
 */
class GridDataFactoryNotFoundException extends \ApiPlatform\Exception\InvalidResourceException
{
}
