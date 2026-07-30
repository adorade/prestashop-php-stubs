<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * Admin controller for the common actions across the whole admin interface.
 */
class CommonController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Get a summary of recent events on the shop.
     * This includes:
     * - Created orders
     * - Registered customers
     * - New messages.
     *
     * @return JsonResponse
     */
    public function notificationsAction()
    {
    }
    /**
     * Update the last time a notification type has been seen.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function notificationsAckAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * This will allow you to retrieve an HTML code with a ready and linked paginator.
     *
     * To be able to use this paginator, the current route must have these standard parameters:
     * - offset
     * - limit
     * Both will be automatically manipulated by the paginator.
     * The navigator links (previous/next page...) will never tranfer POST and/or GET parameters
     * (only route parameters that are in the URL).
     *
     * You must add a JS file to the list of JS for view rendering: pagination.js
     *
     * The final way to render a paginator is the following:
     * {% render controller('PrestaShopBundle\\Controller\\Admin\\CommonController::paginationAction',
     *   {'limit': limit, 'offset': offset, 'total': product_count, 'caller_parameters': pagination_parameters}) %}
     *
     * @Template("@PrestaShop/Admin/Common/pagination.html.twig")
     *
     * @param Request $request
     * @param int $limit
     * @param int $offset
     * @param int $total
     * @param string $view full|quicknav To change default template used to render the content
     * @param string $prefix Indicates the params prefix (eg: ?limit=10&offset=20 -> ?scope[limit]=10&scope[offset]=20)
     *
     * @return array|Response
     */
    public function paginationAction(\Symfony\Component\HttpFoundation\Request $request, $limit = 10, $offset = 0, $total = 0, $view = 'full', $prefix = '')
    {
    }
    /**
     * Render a right sidebar with content from an URL.
     *
     * @param string $url
     * @param string $title
     * @param string $footer
     *
     * @return Response
     */
    public function renderSidebarAction($url, $title = '', $footer = '')
    {
    }
    /**
     * Renders a KPI row.
     *
     * @param KpiRowInterface $kpiRow
     *
     * @return Response
     */
    public function renderKpiRowAction(\PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowInterface $kpiRow)
    {
    }
    /**
     * @param string $controller
     * @param string $action
     * @param string $filterId
     *
     * @return JsonResponse
     *
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function resetSearchAction($controller = '', $action = '', $filterId = '')
    {
    }
    /**
     * Specific action to render a specific field twice.
     *
     * @param string $formName the form name
     * @param string $formType the form type FQCN
     * @param string $fieldName the field name
     * @param array $fieldData the field data
     *
     * @return Response
     */
    public function renderFieldAction($formName, $formType, $fieldName, $fieldData)
    {
    }
    /**
     * Process Grid search.
     *
     * @param Request $request
     * @param string $gridDefinitionFactoryServiceId
     * @param string $redirectRoute
     * @param array $redirectQueryParamsToKeep
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @return RedirectResponse
     */
    public function searchGridAction(\Symfony\Component\HttpFoundation\Request $request, $gridDefinitionFactoryServiceId, $redirectRoute, array $redirectQueryParamsToKeep = [])
    {
    }
}
