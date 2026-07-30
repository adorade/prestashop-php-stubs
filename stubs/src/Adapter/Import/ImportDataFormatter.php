<?php

namespace PrestaShop\PrestaShop\Adapter\Import;

/**
 * Class ImportDataFormatter is an adapter with data formatting methods for import.
 */
final class ImportDataFormatter
{
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Adapter\Tools $tools)
    {
    }
    /**
     * @param string|int $value
     *
     * @return bool
     */
    public function getBoolean($value)
    {
    }
    /**
     * @param string $field
     *
     * @return float
     */
    public function getPrice($field)
    {
    }
    /**
     * Create a multilang field.
     *
     * @param string $field
     *
     * @return array
     */
    public function createMultiLangField($field)
    {
    }
    /**
     * Split the field by separator.
     *
     * @param string|null $field
     * @param string $separator
     *
     * @return array
     */
    public function split($field, $separator)
    {
    }
    /**
     * Transform given value into a friendly url string.
     *
     * @param string $value
     *
     * @return string
     */
    public function createFriendlyUrl($value)
    {
    }
}
