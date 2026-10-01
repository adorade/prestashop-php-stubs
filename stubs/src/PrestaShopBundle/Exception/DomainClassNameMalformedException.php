<?php

namespace PrestaShopBundle\Exception;

/**
 * Is thrown if the class name of the CQRS list is not a correct class name
 */
class DomainClassNameMalformedException extends \PrestaShop\PrestaShop\Core\Domain\Exception\DomainException
{
}
