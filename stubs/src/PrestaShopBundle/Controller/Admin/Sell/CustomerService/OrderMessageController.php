<?php

namespace PrestaShopBundle\Controller\Admin\Sell\CustomerService;

/**
 * Manages page under "Sell > Customer Service > Order Messages"
 */
class OrderMessageController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show list of Order messages
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\OrderMessageFilters $filters
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.order_message')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $orderMessageGridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\OrderMessageFilters $filters
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Create new order message
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_order_messages_index')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.order_message_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.order_message_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature $multiStoreFeature
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Edit existing order message
     *
     * @param int $orderMessageId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_order_messages_index')]
    public function editAction(
        int $orderMessageId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.order_message_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.order_message_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Delete single order message
     *
     * @param int $orderMessageId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_order_messages_index')]
    public function deleteAction(int $orderMessageId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete order messages in bulk action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_order_messages_index')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
