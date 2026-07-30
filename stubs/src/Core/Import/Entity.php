<?php

namespace PrestaShop\PrestaShop\Core\Import;

/**
 * Class Entity defines available import entities.
 */
final class Entity
{
    public const TYPE_CATEGORIES = 0;
    public const TYPE_PRODUCTS = 1;
    public const TYPE_COMBINATIONS = 2;
    public const TYPE_CUSTOMERS = 3;
    public const TYPE_ADDRESSES = 4;
    public const TYPE_MANUFACTURERS = 5;
    public const TYPE_SUPPLIERS = 6;
    public const TYPE_ALIAS = 7;
    public const TYPE_STORE_CONTACTS = 8;
    public const AVAILABLE_TYPES = ['categories' => self::TYPE_CATEGORIES, 'products' => self::TYPE_PRODUCTS, 'combinations' => self::TYPE_COMBINATIONS, 'customers' => self::TYPE_CUSTOMERS, 'addresses' => self::TYPE_ADDRESSES, 'manufacturers' => self::TYPE_MANUFACTURERS, 'suppliers' => self::TYPE_SUPPLIERS, 'alias' => self::TYPE_ALIAS, 'contacts' => self::TYPE_STORE_CONTACTS];
    /**
     * Get import entity type from name.
     *
     * @param string $importType
     *
     * @return int
     */
    public static function getFromName($importType)
    {
    }
}
