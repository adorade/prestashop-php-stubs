<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Simple class to output CSV data
 * Uses CollectionCore.
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
