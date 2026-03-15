<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller for the Product pages using the Symfony architecture:
 * - categories
 * - product list
 * - product details
 * - product attributes
 * - ...
 *
 * This controller is the first one to be refactored to the new Symfony Architecture.
 * The retro-compatibility is dropped for the corresponding Admin pages.
 * A set of hooks are integrated and an Adapter is made to wrap the new EventDispatcher
 * component to the existing hook system. So existing hooks are always triggered, but from the new
 * code (and so needs to be adapted on the module side ton comply on the new parameters formats,
 * the new UI style, etc...).
 */
class ProductController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Used to validate connected user authorizations.
     */
    public const PRODUCT_OBJECT = 'ADMINPRODUCTS_';
    /**
     * Get the Catalog page with KPI banner, product list, bulk actions, filters, search, etc...
     *
     * URL example: /product/catalog/40/20/id_product/asc
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     * @Template("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig")
     *
     * @param Request $request
     * @param int $limit The size of the listing
     * @param int $offset The offset of the listing
     * @param string $orderBy To order product list
     * @param string $sortOrder To order product list
     *
     * @return array|Template|RedirectResponse|Response
     *
     * @throws \Symfony\Component\Translation\Exception\InvalidArgumentException
     * @throws \Symfony\Component\Routing\Exception\RouteNotFoundException
     * @throws LogicException
     * @throws \Symfony\Component\Routing\Exception\MissingMandatoryParametersException
     * @throws \Symfony\Component\Routing\Exception\InvalidParameterException
     * @throws \Symfony\Component\Form\Exception\LogicException
     * @throws \Symfony\Component\Form\Exception\AlreadySubmittedException
     */
    public function catalogAction(\Symfony\Component\HttpFoundation\Request $request, $limit = 10, $offset = 0, $orderBy = 'id_product', $sortOrder = 'desc')
    {
    }
    /**
     * Get only the list of products to display on the main Admin Product page.
     * The full page that shows products list will subcall this action (from catalogAction).
     * URL example: /product/list/html/40/20/id_product/asc.
     *
     * @Template("@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig")
     *
     * @param Request $request
     * @param int $limit The size of the listing
     * @param int $offset The offset of the listing
     * @param string $orderBy To order product list
     * @param string $sortOrder To order product list
     * @param string $view full|quicknav To change default template used to render the content
     *
     * @return array|Template|Response
     */
    public function listAction(\Symfony\Component\HttpFoundation\Request $request, $limit = 10, $offset = 0, $orderBy = 'id_product', $sortOrder = 'asc', $view = 'full')
    {
    }
    /**
     * Create a new basic product
     * Then return to form action.
     *
     * @return RedirectResponse
     *
     * @throws LogicException
     * @throws \PrestaShopException
     */
    public function newAction()
    {
    }
    /**
     * Product form.
     *
     * @Template("@PrestaShop/Admin/Product/ProductPage/product.html.twig")
     *
     * @param int $id The product ID
     * @param Request $request
     *
     * @return array|Response Template vars
     *
     * @throws Exception
     */
    public function formAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Do bulk action on a list of Products. Used with the 'selection action' dropdown menu on the Catalog page.
     *
     * @param Request $request
     * @param string $action The action to apply on the selected products
     *
     * @throws Exception if action not properly set or unknown
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function bulkAction(\Symfony\Component\HttpFoundation\Request $request, $action)
    {
    }
    /**
     * Do mass edit action on the current page of products.
     * Used with the 'grouped action' dropdown menu on the Catalog page.
     *
     * @param Request $request
     * @param string $action The action to apply on the selected products
     *
     * @throws Exception if action not properly set or unknown
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function massEditAction(\Symfony\Component\HttpFoundation\Request $request, $action)
    {
    }
    /**
     * Do action on one product at a time. Can be used at many places in the controller's page.
     *
     * @param string $action The action to apply on the selected product
     * @param int $id the product ID to apply the action on
     *
     * @throws Exception if action not properly set or unknown
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function unitAction($action, $id)
    {
    }
    /**
     * Toggle product status
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     *
     * @param int $productId
     *
     * @return JsonResponse
     */
    public function toggleStatusAction(\Symfony\Component\HttpFoundation\Request $request, $productId)
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     *
     * @return CsvResponse
     *
     * @throws \Symfony\Component\Translation\Exception\InvalidArgumentException
     */
    public function exportAction()
    {
    }
    /**
     * Set the Catalog filters values and redirect to the catalogAction.
     *
     * URL example: /product/catalog_filters/42/last/32
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int|string $quantity the quantity to set on the catalog filters persistence
     * @param string $active the activation state to set on the catalog filters persistence
     *
     * @return RedirectResponse
     */
    public function catalogFiltersAction($quantity = 'none', $active = 'none')
    {
    }
    /**
     * @deprecated since 1.7.5.0, to be removed in 1.8 rely on CommonController::renderFieldAction
     *
     * @throws \OutOfBoundsException
     * @throws LogicException
     * @throws \PrestaShopException
     */
    public function renderFieldAction($productId, $step, $fieldName)
    {
    }
}
