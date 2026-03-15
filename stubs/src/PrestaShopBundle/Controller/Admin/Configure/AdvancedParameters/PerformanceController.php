<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Performance" page display.
 */
class PerformanceController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    public const CONTROLLER_NAME = 'AdminAdvancedParametersPerformance';
    /**
     * Displays the Performance main page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @return Response
     */
    public function indexAction(): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process the Performance Smarty configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     * @DemoRestricted(redirectRoute="admin_performance")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processSmartyFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Performance Debug Mode configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     * @DemoRestricted(redirectRoute="admin_performance")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processDebugModeFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Performance Optional Features configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     * @DemoRestricted(redirectRoute="admin_performance")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processOptionalFeaturesFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Performance Combine Compress Cache configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     * @DemoRestricted(redirectRoute="admin_performance")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processCombineCompressCacheFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Performance Media Servers configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     * @DemoRestricted(redirectRoute="admin_performance")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processMediaServersFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Performance Caching configuration form.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     * @DemoRestricted(redirectRoute="admin_performance")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function processCachingFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Performance configuration form.
     *
     * @param Request $request
     * @param FormHandlerInterface $formHandler
     * @param string $hookName
     *
     * @return RedirectResponse
     */
    protected function processForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler, string $hookName)
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="Access denied.")
     * @DemoRestricted(redirectRoute="admin_performance")
     *
     * @return RedirectResponse
     */
    public function disableNonBuiltInAction(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this.",
     *     redirectRoute="admin_performance"
     * )
     *
     * @return RedirectResponse
     */
    public function clearCacheAction()
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getSmartyFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getDebugModeFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getOptionalFeaturesFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getCombineCompressCacheFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getMediaServersFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormHandlerInterface
     */
    protected function getCachingFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
    /**
     * @return FormBuilderInterface
     */
    protected function getMemcacheFormBuilder(): \Symfony\Component\Form\FormBuilderInterface
    {
    }
}
