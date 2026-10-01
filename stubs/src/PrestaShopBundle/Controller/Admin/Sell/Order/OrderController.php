<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

/**
 * Manages "Sell > Orders" page
 */
class OrderController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Default number of products per page (in case invalid value is used)
     */
    public const DEFAULT_PRODUCTS_NUMBER = 8;
    /**
     * Options used for the number of products per page
     */
    public const PRODUCTS_PAGINATION_OPTIONS = [8, 20, 50, 100];
    public function __construct(private readonly \Symfony\Component\Form\FormFactoryInterface $formFactory)
    {
    }
    /**
     * Shows list of orders
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\OrderFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\OrderFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.kpi_row.factory.orders')]
        \PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowFactoryInterface $orderKpiFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.order')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactory $orderGridFactory
    )
    {
    }
    /**
     * Places an order from BO
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function placeAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.cart_summary_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * Renders create order page.
     * Whole page dynamics are on javascript side.
     * To load specific cart pass cartId to url query params (handled by javascript)
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\LanguageByIdChoiceProvider $languageChoiceProvider,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.choice_provider.currency_by_id')]
        \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $currencyChoiceProvider
    )
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function searchAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.definition.factory.order')]
        \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\OrderGridDefinitionFactory $orderGridDefinitionFactory
    )
    {
    }
    /**
     * Generates invoice PDF for given order
     *
     * @param int $orderId
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function generateInvoicePdfAction(
        int $orderId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.pdf.order_invoice_pdf_generator')]
        \PrestaShop\PrestaShop\Adapter\PDF\OrderInvoicePdfGenerator $invoicePdfGenerator
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Generates delivery slip PDF for given order
     *
     * @param int $orderId
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function generateDeliverySlipPdfAction(
        int $orderId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.pdf.delivery_slip_pdf_generator')]
        \PrestaShop\PrestaShop\Adapter\PDF\DeliverySlipPdfGenerator $deliverySlipPdfGenerator
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function changeOrdersStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\OrderFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function exportAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\OrderFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.order')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactory $orderGridFactory
    )
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function viewAction(
        int $orderId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cancel_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.order.order_sibling_provider')]
        \PrestaShop\PrestaShop\Core\Order\OrderSiblingProviderInterface $orderSiblingProvider,
        \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider,
        \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'PrestaShop\PrestaShop\Core\Grid\Factory\ShipmentFactory')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $shipmentGridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\ShipmentFilters $filters,
        \PrestaShop\PrestaShop\Adapter\Tools $tools
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function getMergeShipmentForm(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function getEditShipmentForm(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function mergeShipmentAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function editShipmentAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function splitShipmentAction(int $orderId, int $shipmentId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \Exception
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", message: 'You do not have permission to show this.')]
    public function getSplitShipmentForm(
        int $orderId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'PrestaShop\PrestaShop\Adapter\Order\Repository\OrderDetailRepository')]
        \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderDetailRepository $orderDetailRepository
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function partialRefundAction(
        int $orderId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cancel_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.partial_refund_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))")]
    public function standardRefundAction(
        int $orderId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cancel_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.standard_refund_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))")]
    public function returnProductAction(
        int $orderId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cancel_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.return_product_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function addProductAction(
        int $orderId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cancel_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider,
        \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function getProductPricesAction(int $orderId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $orderId
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function getInvoicesAction(
        int $orderId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.form.choice_provider.order_invoice_by_id')]
        \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $choiceProvider
    )
    {
    }
    /**
     * @param int $orderId
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function getDocumentsAction(int $orderId)
    {
    }
    /**
     * @param int $orderId
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function getShippingAction(int $orderId)
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function updateShippingAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param int $orderCartRuleId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function removeCartRuleAction(int $orderId, int $orderCartRuleId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param int $orderInvoiceId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function updateInvoiceNoteAction(int $orderId, int $orderInvoiceId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param int $orderDetailId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function updateProductAction(
        int $orderId,
        int $orderDetailId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cancel_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider,
        \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function addCartRuleAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function updateStatusAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Updates order status directly from list page.
     *
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function updateStatusFromListAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", message: 'You do not have permission to edit this.', redirectQueryParamsToKeep: ['orderId'], redirectRoute: 'admin_orders_view')]
    public function addPaymentAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function previewAction(int $orderId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Duplicates cart from specified order
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function duplicateOrderCartAction(int $orderId)
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function sendMessageAction(\Symfony\Component\HttpFoundation\Request $request, int $orderId, \Symfony\Component\Routing\RouterInterface $router): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function changeCustomerAddressAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function changeCurrencyAction(int $orderId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param int $orderStatusId
     * @param int $orderHistoryId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', 'AdminOrders')", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function resendEmailAction(int $orderId, int $orderStatusId, int $orderHistoryId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $orderId
     * @param int $orderDetailId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function deleteProductAction(int $orderId, int $orderDetailId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function getDiscountsAction(int $orderId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function getPricesAction(int $orderId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function getPaymentsAction(int $orderId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function getProductsListAction(
        int $orderId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cancel_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider,
        \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Generates invoice for given order
     *
     * @param int $orderId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to generate this.')]
    public function generateInvoiceAction(int $orderId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Sends email with process order link to customer
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function sendProcessOrderEmailAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_view', redirectQueryParamsToKeep: ['orderId'], message: 'You do not have permission to edit this.')]
    public function cancellationAction(
        int $orderId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cancel_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.cancellation_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function configureProductPaginationAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Method for downloading customization picture
     *
     * @param int $orderId
     * @param string $value
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function displayCustomizationImageAction(int $orderId, string $value, \PrestaShop\PrestaShop\Adapter\LegacyContext $context)
    {
    }
    /**
     * Set order internal note.
     *
     * @param mixed $orderId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_orders_index')]
    public function setInternalNoteAction($orderId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to perform this search.')]
    public function searchProductsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
