<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog\Product;

class SpecificPriceController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function listAction(\Symfony\Component\HttpFoundation\Request $request, int $productId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $productId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.specific_price_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.specific_price_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $specificPriceId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.specific_price_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.specific_price_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $specificPriceId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function deleteAction(int $specificPriceId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
