<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
/**
 * Simple class to output CSV data
 * Uses CollectionCore.
 *
 * @since 1.5
 */
class CSVCore
{
    public $filename;
    public $collection;
    public $delimiter;
    /**
     * Loads objects, filename and optionally a delimiter.
     *
     * @param array|Iterator $collection Collection of objects / arrays (of non-objects)
     * @param string $filename used later to save the file
     * @param string $delimiter delimiter used
     */
    public function __construct($collection, $filename, $delimiter = ';')
    {
    }
    /**
     * Main function
     * Adds headers
     * Outputs.
     */
    public function export()
    {
    }
    /**
     * Wraps data and echoes
     * Uses defined delimiter.
     *
     * @param array $data
     */
    public function output($data)
    {
    }
    /**
     * Escapes data.
     *
     * @param string $data
     *
     * @return string $data
     */
    public static function wrap($data)
    {
    }
    /**
     * Adds headers.
     */
    public function headers()
    {
    }
}
