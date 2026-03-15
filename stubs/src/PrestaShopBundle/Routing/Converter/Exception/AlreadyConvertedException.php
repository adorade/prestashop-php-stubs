<?php

namespace PrestaShopBundle\Routing\Converter\Exception;

/**
 * Class AlreadyConvertedException is thrown when trying to converting
 * an already converted url. Thus you can detect no redirection is needed
 * and avoid an infinite loop.
 */
class AlreadyConvertedException extends \PrestaShopBundle\Routing\Converter\Exception\RoutingException
{
}
