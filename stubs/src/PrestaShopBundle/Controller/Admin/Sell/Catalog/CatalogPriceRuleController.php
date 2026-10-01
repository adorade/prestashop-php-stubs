<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Responsible for Sell > Catalog > Discounts > Catalog Price Rules page
 */
#[\PrestaShopBundle\Controller\Attribute\AllShopContext]
class CatalogPriceRuleController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Displays catalog price rule listing page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\CatalogPriceRuleFilters $catalogPriceRuleFilters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\CatalogPriceRuleFilters $catalogPriceRuleFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.catalog_price_rule')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Retrieves catalog prices rules for product.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminProducts') || is_granted('read', 'AdminSpecificPriceRule')")]
    public function listForProductAction(\Symfony\Component\HttpFoundation\Request $request, int $productId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Provides filters functionality.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.definition.factory.catalog_price_rule')]
        \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $gridDefinitionFactory
    )
    {
    }
    /**
     * Deletes catalog price rule
     *
     * @param int|string $catalogPriceRuleId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_catalog_price_rules_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_catalog_price_rules_index')]
    public function deleteAction($catalogPriceRuleId)
    {
    }
    /**
     * Deletes catalogPriceRules on bulk action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_catalog_price_rules_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_catalog_price_rules_index')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show & process catalog price rule creation.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.catalog_price_rule_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $catalogPriceRuleBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.catalog_price_rule_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $catalogPriceRuleHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show & process catalog price rule editing.
     *
     * @param int $catalogPriceRuleId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $catalogPriceRuleId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.catalog_price_rule_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $catalogPriceRuleBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.catalog_price_rule_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $catalogPriceRuleHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
}
