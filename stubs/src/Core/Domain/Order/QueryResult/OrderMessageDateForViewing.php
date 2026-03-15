<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

/**
 * Used in order page view to display date in wanted format.
 */
class OrderMessageDateForViewing
{
    public function __construct(\DateTimeImmutable $date, string $dateFormat)
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
    }
    /**
     * @return string
     */
    public function getFormat(): string
    {
    }
}
