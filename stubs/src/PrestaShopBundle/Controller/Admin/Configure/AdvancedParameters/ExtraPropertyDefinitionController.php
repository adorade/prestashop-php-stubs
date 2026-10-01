<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Manages the "Configure > Advanced Parameters > Extra Property Definitions" page.
 *
 * Provides CRUD operations (index, create, edit, delete, bulk delete).
 *
 * All write operations reject module-owned definitions (module_name IS NOT NULL).
 */
class ExtraPropertyDefinitionController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Displays the extra property definition list grid.
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\ExtraPropertyDefinitionFilters $filters
     * @param \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\ExtraPropertyDefinitionFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.extra_property_definition')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays and handles the extra property definition creation form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder
     * @param \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\AssociationExistenceChecker $associationChecker
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.builder.extra_property_definition_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.extra_property_definition_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\AssociationExistenceChecker $associationChecker
    ): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Returns the recursive field tree of an identifiable-object form as JSON, so the
     * "associated forms" picker can lazily suggest placement paths for one formId at a time
     * (the tree is too expensive to inline for every form on page load).
     *
     * Always responds 200: an unknown or un-introspectable form yields {"available": false}
     * and the UI falls back to a free-text path input.
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function formFieldsAction(string $formId, \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\FormFieldTreeProvider $treeProvider): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Displays and handles the extra property definition edit form.
     *
     * Module-owned definitions are not editable: the grid only ever links such rows to
     * viewAction(), but a direct URL visit is still redirected there as a safety net — detected
     * from the form's hidden module_name field, no separate query needed.
     *
     * @param int $extraPropertyDefinitionId
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder
     * @param \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\AssociationExistenceChecker $associationChecker
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_extra_property_definitions_index')]
    public function editAction(
        int $extraPropertyDefinitionId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.builder.extra_property_definition_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.extra_property_definition_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\AssociationExistenceChecker $associationChecker
    ): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Displays a module-owned extra property definition in read-only mode.
     *
     * Reuses the same form builder/type as createAction()/editAction() purely for display: no
     * FormHandlerInterface is involved and the request is never bound to that form.
     *
     * One exception to read-only: the shop association — the single field the Update command
     * accepts on module-owned definitions — is editable through a small standalone form
     * (multistore only), submitted back to this action (POST).
     *
     * @param int $extraPropertyDefinitionId
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_extra_property_definitions_index')]
    public function viewAction(
        int $extraPropertyDefinitionId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.builder.extra_property_definition_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder
    ): \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes one extra property definition but keeps its physical SQL column.
     *
     * @param int $extraPropertyDefinitionId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_extra_property_definitions_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function deleteAction(int $extraPropertyDefinitionId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes one extra property definition and also drops its physical SQL column.
     *
     * @param int $extraPropertyDefinitionId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_extra_property_definitions_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function deleteDropColumnAction(int $extraPropertyDefinitionId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes multiple extra property definitions but keeps their physical SQL columns.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_extra_property_definitions_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes multiple extra property definitions and also drops their physical SQL columns.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_extra_property_definitions_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function bulkDeleteDropColumnAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Maps domain exceptions to human-readable error messages for flash display.
     * ExtraPropertyRegistrationFailureException is keyed by its reason code.
     *
     * @return array<string, string|array<int, string>>
     */
    protected function getErrorMessages(): array
    {
    }
}
