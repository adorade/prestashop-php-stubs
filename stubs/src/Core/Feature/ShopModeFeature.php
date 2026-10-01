<?php

namespace PrestaShop\PrestaShop\Core\Feature;

class ShopModeFeature
{
    public const CONFIGURATION_NAME = 'PS_SHOP_MODE';
    public const DEFAULT_SHOP_MODE = \PrestaShop\PrestaShop\Core\Feature\Enum\ShopModeEnum::SHOP_MODE_B2C_ONLY;
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    public function getCurrentShopMode(): \PrestaShop\PrestaShop\Core\Feature\Enum\ShopModeEnum
    {
    }
    public function isB2BShopModeEnable(): bool
    {
    }
    public function isB2CShopModeEnable(): bool
    {
    }
    public function update(\PrestaShop\PrestaShop\Core\Feature\Enum\ShopModeEnum $shopModeEnum): void
    {
    }
}
