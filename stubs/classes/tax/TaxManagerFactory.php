<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
     * @param Address $address
     *
     * @return string
     */
    protected static function getCacheKey(\Address $address)
    {
    }
}
