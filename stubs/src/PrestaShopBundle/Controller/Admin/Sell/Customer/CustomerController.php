<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Customer;

/**
 * Class CustomerController manages "Sell > Customers" page.
 */
class CustomerController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show customers listing.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index', message: 'You do not have permission to view this.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.kpi_row.factory.customers')]
        \PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowFactoryInterface $customersKpiFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show customer create form & handle processing of it.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.customer_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.customer_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.group.provider.default_groups_provider')]
        \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroupsProviderInterface $defaultGroupsProvider,
        \PrestaShop\PrestaShop\Core\B2b\B2bFeature $b2bFeature
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show customer edit form & handle processing of it.
     *
     * @param int $customerId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index')]
    public function editAction(
        int $customerId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.customer_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.customer_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Core\B2b\B2bFeature $b2bFeature
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * View customer information.
     *
     * @param int $customerId
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerDiscountFilters $customerDiscountFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerAddressFilters $customerAddressFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerCartFilters $customerCartFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerOrderFilters $customerOrderFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerBoughtProductFilters $customerBoughtProductFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerViewedProductFilters $customerViewedProductFilters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_customers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index')]
    public function viewAction(
        int $customerId,
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerDiscountFilters $customerDiscountFilters,
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerAddressFilters $customerAddressFilters,
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerCartFilters $customerCartFilters,
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerOrderFilters $customerOrderFilters,
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerBoughtProductFilters $customerBoughtProductFilters,
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerViewedProductFilters $customerViewedProductFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer.discount')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerDiscountGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer.address')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerAddressGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer.order')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerOrderGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer.cart')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerCartGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer.bought_product')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerBoughtProductGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer.viewed_product')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerViewedProductGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Set private note about customer.
     *
     * @param int $customerId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index')]
    public function setPrivateNoteAction(int $customerId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Transforms guest to customer
     *
     * @param int $customerId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index')]
    public function transformGuestToCustomerAction(int $customerId, \Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Sets required fields for customer
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index')]
    public function setRequiredFieldsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Search for customers by query.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Provides customer information for address creation in json format
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function getCustomerInformationAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Toggle customer status.
     *
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index', message: 'You do not have permission to edit this.')]
    public function toggleStatusAction(int $customerId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Toggle customer newsletter subscription status.
     *
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index', message: 'You do not have permission to edit this.')]
    public function toggleNewsletterSubscriptionAction(int $customerId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Toggle customer partner offer subscription status.
     *
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index', message: 'You do not have permission to edit this.')]
    public function togglePartnerOfferSubscriptionAction(int $customerId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Delete customers in bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index', message: 'You do not have permission to delete this.')]
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete customer.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index', message: 'You do not have permission to delete this.')]
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enable customers in bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index', message: 'You do not have permission to edit this.')]
    public function enableBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disable customers in bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_customers_index', message: 'You do not have permission to edit this.')]
    public function disableBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Export filtered customers
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function exportAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerGridFactory
    ): \PrestaShopBundle\Component\CsvResponse
    {
    }
    /**
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function getCartsAction(int $customerId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $customerId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")]
    public function getOrdersAction(int $customerId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
