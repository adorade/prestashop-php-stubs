<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * @experimental Depends on ADR https://github.com/PrestaShop/ADR/pull/36
 */
class ShopContextBuilder implements \PrestaShop\PrestaShop\Core\Context\LegacyContextBuilderInterface
{
    use \PrestaShop\PrestaShop\Core\Context\LegacyObjectCheckerTrait;
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, private readonly \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, private readonly \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature $multistoreFeature)
    {
    }
    public function build(): \PrestaShop\PrestaShop\Core\Context\ShopContext
    {
    }
    public function buildLegacyContext(): void
    {
    }
    public function setShopId(int $shopId): self
    {
    }
    public function setShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): self
    {
    }
    public function setSecureMode(bool $canUseSecureMode): void
    {
    }
}
