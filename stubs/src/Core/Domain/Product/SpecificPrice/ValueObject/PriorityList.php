<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject;

/**
 * Holds valid specific price priority values
 */
class PriorityList
{
    public const PRIORITY_GROUP = 'id_group';
    public const PRIORITY_CURRENCY = 'id_currency';
    public const PRIORITY_COUNTRY = 'id_country';
    public const PRIORITY_SHOP = 'id_shop';
    public const AVAILABLE_PRIORITIES = ['group' => self::PRIORITY_GROUP, 'currency' => self::PRIORITY_CURRENCY, 'country' => self::PRIORITY_COUNTRY, 'shop' => self::PRIORITY_SHOP];
    /**
     * @param string[] $priorities
     */
    public function __construct(array $priorities)
    {
    }
    /**
     * @return string[]
     */
    public function getPriorities(): array
    {
    }
}
