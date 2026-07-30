<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Information" page display.
 */
class SystemInformationController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     * @Template("@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig")
     *
     * @param Request $request
     *
     * @return array<string, array|bool|string|null>
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @return JsonResponse
     */
    public function displayCheckFilesAction()
    {
    }
}
