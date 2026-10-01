<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Controller responsible for "Configure > Shop Parameters > Customer Settings > Groups" page.
 */
class CustomerGroupsController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show Groups tab.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CustomerGroupsFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\CustomerGroupsFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.customer_groups')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $customerGroupsGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays and handles customer group form.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_customer_groups_index', message: 'You need permission to create this.')]
    public function createAction(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays title form.
     *
     * @param int $groupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_customer_groups_index', message: 'You need permission to edit this.')]
    public function editAction(int $groupId, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext): \Symfony\Component\HttpFoundation\Response
    {
    }
}
