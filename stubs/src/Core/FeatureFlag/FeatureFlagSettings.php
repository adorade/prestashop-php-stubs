<?php

namespace PrestaShop\PrestaShop\Core\FeatureFlag;

class FeatureFlagSettings
{
    public const STABILITY_STABLE = 'stable';
    public const STABILITY_BETA = 'beta';
    /**
     * @deprecated Deprecated in 8.1 will be removed in next major.
     */
    public const FEATURE_FLAG_PRODUCT_PAGE_V2 = 'product_page_v2';
    /**
     * @deprecated Deprecated in 8.1 will be removed in next major.
     */
    public const FEATURE_FLAG_PRODUCT_PAGE_V2_MULTI_SHOP = 'product_page_v2_multi_shop';
    public const FEATURE_FLAG_AUTHORIZATION_SERVER = 'authorization_server';
    public const FEATURE_FLAG_MULTIPLE_IMAGE_FORMAT = 'multiple_image_format';
}
