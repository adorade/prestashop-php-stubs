<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Manages the "Configure > Advanced Parameters > Experimental Features" page.
 */
class FeatureFlagController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
}
