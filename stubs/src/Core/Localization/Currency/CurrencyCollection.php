<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency;

class CurrencyCollection implements \IteratorAggregate, \Countable
{
    protected $currencies = [];
    /**
     * Gets the current CurrencyCollection as an Iterator that includes all currencies.
     *
     * @return Traversable<Currency>
     */
    public function getIterator(): \Traversable
    {
    }
    /**
     * Gets the number of Currencies in this collection.
     *
     * @return int
     *             The number of currencies
     */
    public function count(): int
    {
    }
    /**
     * Adds a currency at the end of the collection.
     *
     * @param currency $currency
     *                           The currency to add
     *
     * @return CurrencyCollection
     *                            Fluent interface
     */
    public function add(\PrestaShop\PrestaShop\Core\Localization\Currency $currency)
    {
    }
    /**
     * Returns all currencies in this collection.
     *
     * @return Currency[]
     *                    An array of currencies
     */
    public function all()
    {
    }
    /**
     * Gets a currency by ISO code.
     *
     * @param string $isoCode
     *                        The currency code (alphabetic ISO 4217 code)
     *
     * @return Currency|null
     *                       A Currency instance or null when not found
     */
    public function get($isoCode)
    {
    }
    /**
     * Removes a currency or an array of currencies by iso code from the collection.
     *
     * @param string|string[] $isoCode
     *                                 The currency ISO code or an array of currency ISO codes
     *
     * @return CurrencyCollection
     *                            Fluent interface
     */
    public function remove($isoCode)
    {
    }
    /**
     * Adds a currency collection at the end of the current set by appending all
     * currencies of the added collection.
     *
     * @param CurrencyCollection $collection The CurrencyCollection to append at the end of the current one
     *
     * @return CurrencyCollection Fluent interface
     */
    public function addCollection(\PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyCollection $collection)
    {
    }
    /**
     * Clear the collection, removing all contained currencies.
     *
     * @return CurrencyCollection
     *                            Fluent interface
     */
    public function clear()
    {
    }
}
