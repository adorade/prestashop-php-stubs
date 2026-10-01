<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Responsible for handling "Improve > International > Tax Rules" page.
 */
class TaxRulesGroupController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show tax rules group page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\TaxRulesGroupFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\TaxRulesGroupFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.tax_rules_group')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $taxRulesGroupGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.tax_rules_group_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.tax_rules_group_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Handles tax rules group edit
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $taxRulesGroupId
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\TaxRuleFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $taxRulesGroupId,
        \PrestaShop\PrestaShop\Core\Search\Filters\TaxRuleFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.tax_rules_group_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.tax_rules_group_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.tax_rule')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $taxRuleGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes tax rules group.
     *
     * @param int $taxRulesGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function deleteAction(int $taxRulesGroupId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles status.
     *
     * @param int $taxRulesGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function toggleStatusAction(int $taxRulesGroupId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enables tax rules groups status on bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function bulkEnableStatusAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disables tax rules groups status on bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function bulkDisableStatusAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete tax rules groups on bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
