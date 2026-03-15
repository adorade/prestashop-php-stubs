<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Helps loading specific context, for example in CLI context
 */
class LegacyContextLoader
{
    /**
     * @param Context $context
     */
    public function __construct(\Context $context)
    {
    }
    /**
     * @param string|null $controllerClassName
     * @param int|null $currencyId
     * @param int|null $employeeId
     * @param int|null $shopId
     * @param int|null $shopGroupId
     *
     * @return self
     */
    public function loadGenericContext(?string $controllerClassName = null, ?int $currencyId = null, ?int $employeeId = null, ?int $shopId = null, ?int $shopGroupId = null): self
    {
    }
    /**
     * @param string|null $controllerClassName
     *
     * @return self
     */
    public function loadControllerContext(?string $controllerClassName = null): self
    {
    }
    /**
     * @param int|null $currencyId
     *
     * @return self
     */
    public function loadCurrencyContext(?int $currencyId = null): self
    {
    }
    /**
     * @param int|null $employeeId
     *
     * @return self
     */
    public function loadEmployeeContext(?int $employeeId = null): self
    {
    }
    /**
     * @param int $shopId
     *
     * @return self
     */
    public function loadShopContext(int $shopId = 1): self
    {
    }
    /**
     * @param int $shopGroupId
     *
     * @return self
     */
    public function loadShopGroupId(int $shopGroupId): self
    {
    }
}
