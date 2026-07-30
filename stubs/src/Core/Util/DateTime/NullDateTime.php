<?php

namespace PrestaShop\PrestaShop\Core\Util\DateTime;

/**
 * Reflects null value of DateTime. Only format() method should be used, other methods might produce unexpected results
 */
class NullDateTime extends \DateTimeImmutable
{
    public function __construct()
    {
    }
    /**
     * @return array<string, string>
     */
    public static function getSupportedFormats(): array
    {
    }
    /**
     * {@inheritdoc}
     *
     * Outputs string representing null date time
     */
    public function format($format): string
    {
    }
    /**
     * Adds an amount of days, months, years, hours, minutes and seconds
     *
     * @param string|DateInterval $interval
     *
     * @return static
     */
    public function add($interval): \DateTimeImmutable
    {
    }
    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public static function createFromFormat($format, $datetime, $timezone = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function createFromMutable($object): \DateTimeImmutable
    {
    }
    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public static function getLastErrors()
    {
    }
    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function modify($modifier)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setDate($year, $month, $day): \DateTimeImmutable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setISODate($year, $week, $dayOfWeek = 1): \DateTimeImmutable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setTime($hour, $minute, $second = 0, $microsecond = 0): \DateTimeImmutable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setTimestamp($timestamp): \DateTimeImmutable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setTimezone($timezone): \DateTimeImmutable
    {
    }
    /**
     * Subtracts an amount of days, months, years, hours, minutes and seconds
     *
     * @param string|DateInterval $interval
     *
     * @return static
     */
    public function sub($interval): \DateTimeImmutable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function diff($targetObject, $absolute = false): \DateInterval
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOffset(): int
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getTimestamp(): int
    {
    }
    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function getTimezone()
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function createFromInterface(\DateTimeInterface $object): \DateTimeImmutable
    {
    }
}
