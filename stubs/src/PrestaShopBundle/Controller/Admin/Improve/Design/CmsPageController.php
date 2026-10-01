<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Design;

/**
 * Class CmsPageController is responsible for handling the logic in "Improve -> Design -> pages" page.
 */
class CmsPageController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public static function getSubscribedServices(): array
    {
    }
    /**
     * Responsible for displaying page content.
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CmsPageCategoryFilters $categoryFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CmsPageFilters $cmsFilters
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\CmsPageCategoryFilters $categoryFilters,
        \PrestaShop\PrestaShop\Core\Search\Filters\CmsPageFilters $cmsFilters,
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProviderInterface $helperBlockLinkProvider,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.cms_page.data_provider.cms_page_view')]
        \PrestaShop\PrestaShop\Core\CMS\CmsPageViewDataProviderInterface $cmsPageViewDataProvider,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.cms_page_category')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $cmsCategoryGridFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.cms_page')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $cmsGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Creates cms page
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to add this.')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.shop.url.cms_provider')]
        \PrestaShop\PrestaShop\Adapter\Shop\Url\CmsProvider $urlProvider,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cms_page_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $cmsPageFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.cms_page_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $cmsPageFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $cmsPageId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $cmsPageId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.shop.url.cms_provider')]
        \PrestaShop\PrestaShop\Adapter\Shop\Url\CmsProvider $urlProvider,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cms_page_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $cmsPageFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.cms_page_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $cmsPageFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays cms category page form and handles create new cms page category logic.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to add this.')]
    public function createCmsCategoryAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cms_page_category_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $cmsPageCategoryFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.cms_page_category_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $cmsPageCategoryFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays cms category page form and handles update cms page category logic.
     *
     * @param int $cmsCategoryId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function editCmsCategoryAction(
        int $cmsCategoryId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.cms_page_category_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $cmsPageCategoryFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.cms_page_category_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $cmsPageCategoryFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes cms page category and all its children categories.
     *
     * @param int $cmsCategoryId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to delete this.')]
    public function deleteCmsCategoryAction(int $cmsCategoryId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes multiple cms page categories.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to delete this.')]
    public function deleteBulkCmsCategoryAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Updates cms page category position.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function updateCmsCategoryPositionAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.cms_page_category.position_definition')]
        \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Updates cms page listing position.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function updateCmsPositionAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.cms_page.position_definition')]
        \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles cms page category status.
     *
     * @param int $cmsCategoryId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function toggleCmsCategoryAction($cmsCategoryId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Changes multiple cms page category statuses to enabled.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function bulkCmsPageCategoryStatusEnableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Changes multiple cms page category statuses to disabled.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function bulkCmsPageCategoryStatusDisableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles cms page listing status.
     *
     * @param int $cmsId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function toggleCmsAction($cmsId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disables multiple cms pages.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function bulkDisableCmsPageStatusAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enables multiple cms pages.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to edit this.')]
    public function bulkEnableCmsPageStatusAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes multiple cms pages.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to delete this.')]
    public function bulkDeleteCmsPageAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes cms page by given id.
     *
     * @param int $cmsId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_cms_pages_index', redirectQueryParamsToKeep: ['id_cms_category'], message: 'You do not have permission to delete this.')]
    public function deleteCmsAction($cmsId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * The redirection URL is generation thanks to the ProductPreviewProvider however it can't be used in the grid
     * since the LinkRowAction expects a symfony route, so this action is merely used as a proxy for symfony routing
     * and redirects to the appropriate product preview url.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function previewAction(
        int $cmsPageId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.shop.url.cms_provider')]
        \PrestaShop\PrestaShop\Adapter\Shop\Url\CmsProvider $previewUrlProvider
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
