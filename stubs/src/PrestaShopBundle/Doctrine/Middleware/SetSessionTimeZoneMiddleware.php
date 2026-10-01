<?php

namespace PrestaShopBundle\Doctrine\Middleware;

/**
 * Aligns the MySQL session time zone with PHP's current time zone offset on every
 * Doctrine DBAL connection, so that SQL directives such as NOW() or CURRENT_TIMESTAMP
 * evaluate in the shop time zone configured in PHP rather than the MySQL server time
 * zone (UTC by default). See issue #30828.
 *
 * A numeric offset (e.g. "+02:00") is used on purpose: it requires no MySQL time zone
 * tables and is recomputed on each connection, so DST is always correct at connect time.
 *
 * This mirrors the legacy Db::setTimeZone() behaviour for the Symfony/CQRS connection.
 */
final class SetSessionTimeZoneMiddleware implements \Doctrine\DBAL\Driver\Middleware
{
    public function wrap(\Doctrine\DBAL\Driver $driver): \Doctrine\DBAL\Driver
    {
    }
}
