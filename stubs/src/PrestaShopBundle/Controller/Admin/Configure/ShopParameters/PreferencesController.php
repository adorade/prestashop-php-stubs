<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Responsible of "Configure > Shop Parameters > General" page.
 */
class PreferencesController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    public const CONTROLLER_NAME = 'AdminPreferences';
    /**
     * @param Request $request
     * @param FormInterface|null $form
     *
     * @return Response
     *
     * @throws \Exception
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Form\FormInterface $form = null)
    {
    }
    /**
     * @param Request $request
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_preferences")
     *
     * @DemoRestricted(redirectRoute="admin_preferences")
     *
     * @return Response
     *
     * @throws \LogicException
     */
    public function processFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
