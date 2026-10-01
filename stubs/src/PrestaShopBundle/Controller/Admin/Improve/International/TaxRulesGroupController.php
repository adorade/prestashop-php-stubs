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
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $taxRulesGroupId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.tax_rules_group_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.tax_rules_group_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Returns states for a given country as JSON.
     *
     * @param int $countryId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function getStatesForCountryAction(
        int $countryId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'doctrine.dbal.default_connection')]
        \Doctrine\DBAL\Connection $connection,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(param: 'database_prefix')]
        string $dbPrefix
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Returns paginated list of tax rules for a group as JSON.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $taxRulesGroupId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function listTaxRulesAction(\Symfony\Component\HttpFoundation\Request $request, int $taxRulesGroupId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Handles tax rules grid search (filters).
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $taxRulesGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchTaxRulesAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $taxRulesGroupId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'PrestaShop\PrestaShop\Core\Grid\Definition\Factory\TaxRuleGridDefinitionFactory')]
        \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Creates a tax rule within a group.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $taxRulesGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function createTaxRuleAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $taxRulesGroupId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.tax_rule_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.tax_rule_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Edits a tax rule.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $taxRulesGroupId
     * @param int $taxRuleId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function editTaxRuleAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $taxRulesGroupId,
        int $taxRuleId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.tax_rule_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.tax_rule_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes a single tax rule.
     *
     * @param int $taxRulesGroupId
     * @param int $taxRuleId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function deleteTaxRuleAction(int $taxRulesGroupId, int $taxRuleId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Bulk deletes tax rules within a group.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_tax_rules_groups_index')]
    public function bulkDeleteTaxRulesAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
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
