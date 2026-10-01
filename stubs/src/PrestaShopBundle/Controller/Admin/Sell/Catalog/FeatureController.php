<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Controller responsible for "Sell > Catalog > Attributes & Features > Features" page
 */
class FeatureController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController implements \PrestaShopBundle\Bridge\AdminController\FrameworkBridgeControllerInterface
{
    use \PrestaShopBundle\Bridge\AdminController\FrameworkBridgeControllerTrait;
    use \PrestaShopBundle\Bridge\AdminController\FrameworkBridgeControllerListTrait;
    use \PrestaShopBundle\Bridge\Smarty\FrameworkControllerSmartyTrait;
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Create feature action.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Edit feature action.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $featureId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($featureId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @return \PrestaShopBundle\Bridge\AdminController\ControllerConfiguration
     */
    public function getControllerConfiguration(): \PrestaShopBundle\Bridge\AdminController\ControllerConfiguration
    {
    }
}
