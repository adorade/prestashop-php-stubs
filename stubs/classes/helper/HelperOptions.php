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
