<?php

namespace PrestaShopBundle\Service\Form;

final class ImprovedB2bTabsToggler
{
    /**
     * List of tabs that should be enabled/disabled depending on the feature flag 'improved_b2b'.
     */
    public const TAB_CLASS_NAMES = ['AdminBusinessEntity', 'AdminBusinessEntities', 'AdminCustomersB2B'];
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagChecker, private readonly \PrestaShop\PrestaShop\Core\Feature\ShopModeFeature $shopModeFeature, private readonly \PrestaShopBundle\Entity\Repository\TabRepository $tabRepository)
    {
    }
    public function sync(): void
    {
    }
}
