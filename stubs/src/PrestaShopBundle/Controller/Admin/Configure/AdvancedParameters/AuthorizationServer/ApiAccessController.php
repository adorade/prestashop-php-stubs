<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters\AuthorizationServer;

/**
 * Manages the "Configure > Advanced Parameters > Authorization Server > Api Access" page.
 *
 * @experimental
 */
class ApiAccessController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     */
    public function createAction(): void
    {
    }
}
