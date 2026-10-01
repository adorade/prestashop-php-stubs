<?php

namespace PrestaShop\PrestaShop\Core\Domain\Configuration;

/**
 * @method getInt($key, $default = 0, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null)
 * @method getBoolean($key, $default = false, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null)
 */
interface ShopConfigurationInterface extends \PrestaShop\PrestaShop\Core\ConfigurationInterface
{
    /**
     * @param string $key
     * @param mixed|null $default
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint|null $shopConstraint
     *
     * @return mixed
     */
    public function get($key, $default = null, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null);
    /**
     * @param string $key
     * @param mixed $value
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint|null $shopConstraint
     *
     * @return ShopConfigurationInterface
     */
    public function set($key, $value, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null);
    /**
     * @param string $key
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint|null $shopConstraint
     *
     * @return bool
     */
    public function has($key, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null);
    /**
     * @param string $key
     *
     * @return ShopConfigurationInterface
     */
    public function remove($key);
    /**
     * Get all configuration keys
     *
     * @return array
     */
    public function keys();
}
