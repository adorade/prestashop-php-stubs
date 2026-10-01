<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Class CategoryController is responsible for "Sell > Catalog > Categories" page.
 */
class CategoryController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show categories listing.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CategoryFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('create', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to list this.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\CategoryFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.kpi_row.factory.categories')]
        \PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowFactoryInterface $categoriesKpiFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.category.category_view_data_provider')]
        \PrestaShop\PrestaShop\Adapter\Category\CategoryViewDataProvider $categoryViewDataProvider,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.category_decorator')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $categoryGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show "Add new" form and handle form submit.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.', redirectRoute: 'admin_categories_index')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.category_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $categoryFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.category_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $categoryFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.group.provider.default_groups_provider')]
        \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroupsProviderInterface $defaultGroupsProvider
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show "Add new root category" page & process adding.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.', redirectRoute: 'admin_categories_index')]
    public function createRootAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.root_category_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $rootCategoryFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.root_category_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $rootCategoryFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.group.provider.default_groups_provider')]
        \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroupsProviderInterface $defaultGroupsProvider
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show & process category editing.
     *
     * @param int $categoryId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_categories_index')]
    public function editAction(
        int $categoryId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.category_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $categoryFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.category_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $categoryFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.group.provider.default_groups_provider')]
        \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroupsProviderInterface $defaultGroupsProvider
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show and process category editing.
     *
     * @param int $categoryId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_categories_index')]
    public function editRootAction(
        int $categoryId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.root_category_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $rootCategoryFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.root_category_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $rootCategoryFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.group.provider.default_groups_provider')]
        \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroupsProviderInterface $defaultGroupsProvider
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes category cover image.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $categoryId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_categories_edit', redirectQueryParamsToKeep: ['categoryId'])]
    public function deleteCoverImageAction(\Symfony\Component\HttpFoundation\Request $request, $categoryId)
    {
    }
    /**
     * Deletes category thumbnail image.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $categoryId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_categories_edit', redirectQueryParamsToKeep: ['categoryId'])]
    public function deleteThumbnailImageAction(\Symfony\Component\HttpFoundation\Request $request, $categoryId)
    {
    }
    /**
     * Toggle category status.
     *
     * @param int $categoryId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.')]
    public function toggleStatusAction($categoryId)
    {
    }
    /**
     * Process bulk action for categories status enabling.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_categories_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_categories_index', message: 'You do not have permission to update this.')]
    public function bulkEnableStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process bulk action for categories status disabling.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_categories_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_categories_index', message: 'You do not have permission to update this.')]
    public function bulkDisableStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Processes bulk categories deleting.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_categories_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_categories_index', message: 'You do not have permission to delete this.')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process single category deleting.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_categories_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_categories_index', message: 'You do not have permission to delete this.')]
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Export filtered categories.
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CategoryFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_categories_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_categories_index', message: 'You do not have permission to view this.')]
    public function exportAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\CategoryFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.category')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $categoriesGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Updates category position
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_categories_index')]
    public function updatePositionAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get Categories formatted like ajax_product_file.php.
     *
     * @param int $limit
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminProducts')")]
    public function getAjaxCategoriesAction(
        int $limit,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.data_provider.category')]
        \PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider $categoryDataProvider
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminProducts')")]
    public function getCategoriesTreeAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
