<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Design;

/**
 * Configuration modules positions "Improve > Design > Positions".
 */
class PositionsController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * @var int
     */
    protected $selectedModule = null;
    /**
     * Display hooks positions.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('create', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.legacy.module')]
        \PrestaShop\PrestaShop\Adapter\Module\Module $moduleAdapter,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.legacy.hook')]
        \PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider $hookProvider,
        \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContextService
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Unhook module.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller')~'_')", message: 'Access denied.')]
    public function unhookAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.legacy.module')]
        \PrestaShop\PrestaShop\Adapter\Module\Module $moduleAdapter,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.validate')]
        \PrestaShop\PrestaShop\Adapter\Validate $validateAdapter,
        \PrestaShop\PrestaShop\Core\Shop\ShopContextInterface $shopContext
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Toggle hook status
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')~'_')", message: 'Access denied.')]
    public function toggleStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
