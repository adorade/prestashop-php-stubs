<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * Admin controller for the common actions across the whole admin interface.
 */
class CommonController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public static function getSubscribedServices(): array
    {
    }
    /**
     * Get a summary of recent events on the shop.
     * This includes:
     * - Created orders
     * - Registered customers
     * - New messages.
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminOrders') || is_granted('read', 'AdminCustomers') || is_granted('read', 'AdminCustomerThreads')", message: 'You do not have permission to view this.')]
    public function notificationsAction(): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Update the last time a notification type has been seen.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminOrders') || is_granted('read', 'AdminCustomers') || is_granted('read', 'AdminCustomerThreads')", message: 'You do not have permission to view this.')]
    public function notificationsAckAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
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
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $limit
     * @param int $offset
     * @param int $total
     * @param string $view full|quicknav To change default template used to render the content
     * @param string $prefix Indicates the params prefix (eg: ?limit=10&offset=20 -> ?scope[limit]=10&scope[offset]=20)
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function paginationAction(\Symfony\Component\HttpFoundation\Request $request, ?int $limit = 10, ?int $offset = 0, ?int $total = 0, string $view = 'full', string $prefix = ''): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Render a right sidebar with content from an URL.
     *
     * @param string $url
     * @param string $title
     * @param string $footer
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function renderSidebarAction(\PrestaShop\PrestaShop\Adapter\Tools $tools, string $url, string $title = '', string $footer = ''): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Renders a KPI row.
     *
     * @param \PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowInterface $kpiRow
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function renderKpiRowAction(\PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowInterface $kpiRow, \PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowPresenter $kpiRowPresenter): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param string $controller
     * @param string $action
     * @param string $filterId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function resetSearchAction(\PrestaShopBundle\Entity\Repository\AdminFilterRepository $adminFiltersRepository, string $controller = '', string $action = '', string $filterId = ''): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Process Grid search.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param string $gridDefinitionFactoryServiceId
     * @param string $redirectRoute
     * @param array $redirectQueryParamsToKeep
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchGridAction(\PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryProvider $gridDefinitionFactoryCollection, \Symfony\Component\HttpFoundation\Request $request, string $gridDefinitionFactoryServiceId, string $redirectRoute, array $redirectQueryParamsToKeep = [])
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function updatePositionAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinitionProvider $positionDefinitionProvider): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
