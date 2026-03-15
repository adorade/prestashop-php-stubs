<?php

namespace PrestaShopBundle\Controller\Admin\Improve;

/**
 * Responsible of "Improve > Modules > Modules & Services > Catalog / Manage" page display.
 */
class ModuleController extends \PrestaShopBundle\Controller\Admin\Improve\Modules\ModuleAbstractController
{
    public const CONTROLLER_NAME = 'ADMINMODULESSF';
    public const MAX_MODULES_DISPLAYED = 6;
    /**
     * Controller responsible for displaying "Catalog Module Grid" section of Module management pages with ajax.
     *
     * @AdminSecurity("is_granted('read', 'ADMINMODULESSF_')")
     *
     * @return Response
     */
    public function manageAction()
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('read', 'ADMINMODULESSF_') || is_granted('create', 'ADMINMODULESSF_') || is_granted('update', 'ADMINMODULESSF_') || is_granted('delete', 'ADMINMODULESSF_')"
     * )
     *
     * @param Request $module_name
     *
     * @return Response
     */
    public function configureModuleAction($module_name)
    {
    }
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function moduleAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Controller responsible for importing new module from DropFile zone in BO.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function importModuleAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
