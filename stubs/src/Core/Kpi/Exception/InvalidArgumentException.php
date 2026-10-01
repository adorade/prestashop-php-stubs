<?php

namespace PrestaShop\PrestaShop\Core\Kpi\Exception;

/**
 * Will be thrown if Kpi factory arguments are invalid.
 */
final class InvalidArgumentException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
    /**
     * @param mixed $kpi
     *
     * @return InvalidArgumentException
     */
    public static function invalidKpi($kpi)
    {
    }
    /**
     * @param mixed $identifier
     *
     * @return InvalidArgumentException
     */
    public static function invalidIdentifier($identifier)
    {
    }
}
