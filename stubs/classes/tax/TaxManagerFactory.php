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
 * @since 1.5
 */
class TaxManagerFactoryCore
{
    protected static $cache_tax_manager;
    /**
     * Returns a tax manager able to handle this address.
     *
     * @param Address $address
     * @param int $type
     *
     * @return TaxManagerInterface
     */
    public static function getManager(\Address $address, $type)
    {
    }
    /**
     * Check for a tax manager able to handle this type of address in the module list.
     *
     * @param Address $address
     * @param int $type
     *
     * @return TaxManagerInterface|false
     */
    public static function execHookTaxManagerFactory(\Address $address, $type)
    {
    }
    /**
     * Reset static cache (mainly for test environment)
     */
    public static function resetStaticCache()
    {
    }
    /**
     * Create a unique identifier for the address.
     *
     * @param Address$address
     *
     * @return string
     */
    protected static function getCacheKey(\Address $address)
    {
    }
}
