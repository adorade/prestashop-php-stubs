<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Adapter of Configuration ObjectModel.
 */
class Configuration extends \Symfony\Component\HttpFoundation\ParameterBag implements \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface
{
    public function __construct(array $parameters = [])
    {
    }
    /**
     * @param string|null $key
     *
     * @throws \PrestaShopBundle\Exception\NotImplementedException
     */
    public function all(?string $key = null): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function keys(): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function replace(array $parameters = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function add(array $parameters = [])
    {
    }
    /**
     * Returns constant defined by given $key if exists or check directly into PrestaShop
     * \Configuration.
     *
     * @param string $key
     * @param mixed $default The default value if the parameter key does not exist
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint|null $shopConstraint This parameter should always be given, if not, a ShopConstraint will
     *                                            be built based on the current shop context
     *
     * @return mixed
     */
    public function get($key, $default = null, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null): mixed
    {
    }
    /**
     * Set configuration value.
     *
     * @param string $key
     * @param mixed $value
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint|null $shopConstraint If this parameter is not given, a ShopConstraint will
     *                                            be built based on the current shop context, except if $this->shop is set
     * @param array $options Options @deprecated Will be removed in next major
     *
     * @return $this
     *
     * @throws \Exception
     */
    public function set($key, $value, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null, array $options = [])
    {
    }
    /**
     * @param string $key
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint|null $shopConstraint This parameter should always be given, if not, a ShopConstraint will
     *                                            be built based on the current shop context
     *
     * @return bool
     */
    public function has($key, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null): bool
    {
    }
    /**
     * Removes a configuration key.
     *
     * @param string $key
     *
     * @return self
     */
    public function remove($key)
    {
    }
    /**
     * Unset configuration value.
     *
     * @param string $key
     *
     * @return void
     *
     * @throws \Exception
     *
     * @deprecated since version 1.7.4.0
     */
    public function delete($key)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIterator(): \ArrayIterator
    {
    }
    /**
     * {@inheritdoc}
     */
    public function count(): int
    {
    }
    /**
     * Return if Feature feature is active or not.
     *
     * @return bool
     */
    public function featureIsActive()
    {
    }
    /**
     * Return if Combination feature is active or not.
     *
     * @return bool
     */
    public function combinationIsActive()
    {
    }
    /**
     * Restrict updates of a piece of configuration to a single shop.
     *
     * @param \Shop $shop
     */
    public function restrictUpdatesTo(\Shop $shop)
    {
    }
    /**
     * @param string $key
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public function deleteFromContext(string $key, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    public function setTemporary(string $key, $value): void
    {
    }
}
