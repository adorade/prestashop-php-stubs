<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for the Feature pages.
 */
class FeatureController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Get all values for a given feature.
     *
     * @param int $idFeature The feature Id
     *
     * @return JsonResponse features list
     */
    public function getFeatureValuesAction($idFeature)
    {
    }
}
