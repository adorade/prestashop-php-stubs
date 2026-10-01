<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Class MetaController is responsible for page display and all actions used in Configure -> Shop parameters ->
 * Traffic & Seo -> Seo & Urls tab.
 */
class MetaController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * All these services implement the same interface and are based on the same parent class, so we can't
     * rely on autowiring not add them into the getSubscribedServices that expects a type as the values.
     *
     * So we have to inject them in the constructor to use the Autowire attribute and define the specific
     * service name, this way they are usable in all the shared protected/public methods in this controller.
     *
     * @param \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $setUpUrlsFormHandler
     * @param \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $shopUrlsFormHandler
     * @param \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $seoOptionsFormHandler
     * @param \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $urlSchemaFormHandler
     */
    public function __construct(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.meta_settings.set_up_urls.form_handler')]
        protected \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $setUpUrlsFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.meta_settings.shop_urls.form_handler')]
        protected \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $shopUrlsFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.meta_settings.seo_options.form_handler')]
        protected \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $seoOptionsFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.meta_settings.url_schema.form_handler')]
        protected \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $urlSchemaFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.meta')]
        protected \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $metaGridFactory
    )
    {
    }
    /**
     * This controller uses a lot of services that are used in many methods, especially they are all shared via the
     * renderForm method. Injecting all those services and passing them by parameters would complicate the code a lot,
     * so instead, we register them, so they can be fetched more easily via the container and our getter methods.
     *
     * @return string[]
     */
    public static function getSubscribedServices(): array
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to add this.')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.builder.meta_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $metaFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.meta_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $metaFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_metas_index')]
    public function editAction(
        int $metaId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.builder.meta_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $metaFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.meta_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $metaFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_metas_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function deleteAction(int $metaId, \PrestaShop\PrestaShop\Adapter\Meta\MetaEraser $metaEraser): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_metas_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Adapter\Meta\MetaEraser $metaEraser): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_metas_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_metas_index')]
    public function processSetUpUrlsFormAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_metas_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_metas_index')]
    public function processShopUrlsFormAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_metas_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_metas_index')]
    public function processUrlSchemaFormAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_metas_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_metas_index')]
    public function processSeoOptionsFormAction(\PrestaShop\PrestaShop\Core\Search\Filters\MetaFilters $filters, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_metas_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_metas_index')]
    public function generateRobotsFileAction(\PrestaShop\PrestaShop\Adapter\File\RobotsTextFileGenerator $robotsTextFileGenerator): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    protected function processForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler, string $hookName): \Symfony\Component\Form\FormInterface|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
