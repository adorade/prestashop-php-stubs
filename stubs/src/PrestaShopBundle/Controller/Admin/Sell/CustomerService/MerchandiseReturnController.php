<?php

namespace PrestaShopBundle\Controller\Admin\Sell\CustomerService;

/**
 * Class MerchandiseReturnController responsible for "Sell > Customer Service > Merchandise Returns" page
 */
class MerchandiseReturnController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Render merchandise returns grid and options.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\MerchandiseReturnFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_merchandise_returns_index')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.merchandise_return')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\MerchandiseReturnFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.merchandise_return_options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $optionFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Edit existing order return
     *
     * @param int $orderReturnId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_merchandise_returns_index')]
    public function editAction(
        int $orderReturnId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.order_return_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.order_return_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
}
