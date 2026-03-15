<?php

namespace PrestaShop\PrestaShop\Adapter\Theme;

/**
 * This class is used to retrieve data which is used in settings form to render multi store fields - its used in
 * Theme & logo page.
 *
 * @internal
 */
final class ThemeMultiStoreSettingsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\MultiStoreSettingsFormDataProviderInterface
{
    /**
     * @param bool $isShopFeatureUsed
     * @param bool $isSingleShopContext
     */
    public function __construct($isShopFeatureUsed, $isSingleShopContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
}
