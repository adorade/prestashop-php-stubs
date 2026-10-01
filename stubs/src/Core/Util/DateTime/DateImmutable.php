<?php

namespace PrestaShop\PrestaShop\Core\Util\DateTime;

/**
 * DateImmutable extends DateTimeImmutable to represent dates (without time) for API Platform.
 * It serializes/unserializes using Y-m-d format instead of full datetime format.
 */
class DateImmutable extends \DateTimeImmutable
{
    public function __construct(string $datetime = 'now', ?\DateTimeZone $timezone = null)
    {
    }
}
