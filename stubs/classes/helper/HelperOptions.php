<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Use this helper to generate preferences forms, with values stored in the configuration table.
 */
class HelperOptionsCore extends \Helper
{
    public $required = \false;
    /** @var int */
    public $id;
    public function __construct()
    {
    }
    /**
     * Generate a form for options.
     *
     * @param array $option_list
     *
     * @return string html
     */
    public function generateOptions($option_list)
    {
    }
    /**
     * Type = image.
     */
    public function displayOptionTypeImage($key, $field, $value)
    {
    }
    /**
     * Type = price.
     */
    public function displayOptionTypePrice($key, $field, $value)
    {
    }
    /**
     * Type = disabled.
     */
    public function displayOptionTypeDisabled($key, $field, $value)
    {
    }
    public function getOptionValue($key, $field)
    {
    }
}
