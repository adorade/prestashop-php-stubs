<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * @experimental Depends on ADR https://github.com/PrestaShop/ADR/pull/36
 */
class EmployeeContextBuilder implements \PrestaShop\PrestaShop\Core\Context\LegacyContextBuilderInterface
{
    use \PrestaShop\PrestaShop\Core\Context\LegacyObjectCheckerTrait;
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Employee\EmployeeRepository $employeeRepository, private readonly \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, private readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository)
    {
    }
    public function build(): \PrestaShop\PrestaShop\Core\Context\EmployeeContext
    {
    }
    public function buildLegacyContext(): void
    {
    }
    public function setEmployeeId(?int $employeeId): self
    {
    }
}
