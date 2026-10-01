<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible for "Configure > Advanced Parameters > Performance" page display.
 */
class PerformanceController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Displays the Performance main page.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.memcache_server.manager')]
        \PrestaShop\PrestaShop\Adapter\Cache\MemcacheServerManager $memcacheServerManager,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.smarty.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $smartyFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.debug_mode.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $debugModeFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.optional_features.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $optionalFeaturesFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.ccc.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $combineCompressCacheFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.media_servers.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $mediaServersFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.caching.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $cachingFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.advanced_parameters.performance.memcache.form_builder')]
        \Symfony\Component\Form\FormBuilderInterface $memcacheFormBuilder
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process the Performance Smarty configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_performance')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_performance')]
    public function processSmartyFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.smarty.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $smartyFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Performance Debug Mode configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_performance')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_performance')]
    public function processDebugModeFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.debug_mode.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $debugModeFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Performance Optional Features configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_performance')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_performance')]
    public function processOptionalFeaturesFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.optional_features.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $optionalFeaturesFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Performance Combine Compress Cache configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_performance')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_performance')]
    public function processCombineCompressCacheFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.ccc.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $combineCompressCacheFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Performance Media Servers configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_performance')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_performance')]
    public function processMediaServersFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.media_servers.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $mediaServersFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Performance Caching configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_performance')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_performance')]
    public function processCachingFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.performance.caching.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $cachingFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process the Performance configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
     * @param string $hookName
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    protected function processForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler, string $hookName): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_performance')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'Access denied.', redirectRoute: 'admin_performance')]
    public function disableNonBuiltInAction(\PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository $moduleRepository): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_performance')]
    public function clearCacheAction(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.cache.clearer.cache_clearer_chain')]
        \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
