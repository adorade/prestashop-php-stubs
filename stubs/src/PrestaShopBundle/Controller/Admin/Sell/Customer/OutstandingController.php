<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Customer;

/**
 * Class OutstandingController manages "Sell > Customers > Outstandings" page.
 */
class OutstandingController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show list of outstandings.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\OutstandingFilters $filters
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.outstanding')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\OutstandingFilters $filters
    )
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_outstanding_index')]
    public function searchAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.definition.factory.outstanding')]
        \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.bundle.grid.response_builder')]
        \PrestaShopBundle\Service\Grid\ResponseBuilder $responseBuilder
    )
    {
    }
}
