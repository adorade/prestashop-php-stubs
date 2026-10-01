<?php

namespace PrestaShopBundle\Controller\Admin\Sell\CustomerService;

/**
 * Manages page under "Sell > Customer Service > Customer Service"
 */
class CustomerThreadController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show list of customer threads
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerThreadFilter $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer_thread')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerGridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerThreadFilter $filters
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * View customer thread
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $customerThreadId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'You do not have permission to view this.', redirectRoute: 'admin_customer_threads_index')]
    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext, int $customerThreadId)
    {
    }
    /**
     * Reply to customer thread
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $customerThreadId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_customer_threads_index')]
    public function replyAction(\Symfony\Component\HttpFoundation\Request $request, $customerThreadId)
    {
    }
    /**
     * Update customer thread status
     *
     * @param int $customerThreadId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_customer_threads_index')]
    public function updateStatusFromViewAction(int $customerThreadId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Updates customer thread status directly from list page.
     *
     * @param int $customerThreadId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_customer_threads')]
    public function updateStatusFromListAction(int $customerThreadId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Forward customer thread to another employee
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $customerThreadId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_customer_threads_index')]
    public function forwardAction(\Symfony\Component\HttpFoundation\Request $request, $customerThreadId)
    {
    }
    /**
     * Delete customer thread
     *
     * @param int $customerThreadId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_customer_threads')]
    public function deleteAction(int $customerThreadId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk delete customer thread
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_customer_threads')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
