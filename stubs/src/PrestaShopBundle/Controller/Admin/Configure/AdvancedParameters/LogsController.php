<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Logs" page display.
 */
class LogsController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @var string the controller name for routing
     */
    public const CONTROLLER_NAME = 'AdminLogs';
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @param LogsFilters $filters the list of filters from the request
     *
     * @return Response
     */
    public function indexAction(\PrestaShop\PrestaShop\Core\Search\Filters\LogsFilters $filters)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.", redirectRoute="admin_logs_index"
     * )
     * @DemoRestricted(redirectRoute="admin_logs_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.", redirectRoute="admin_logs_index"
     * )
     * @DemoRestricted(redirectRoute="admin_logs_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function saveSettingsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to update this.", redirectRoute="admin_logs_index")
     *
     * @return RedirectResponse
     *
     * @throws \Doctrine\DBAL\Exception\InvalidArgumentException
     */
    public function deleteAllAction()
    {
    }
}
