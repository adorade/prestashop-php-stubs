<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Controller responsible for "Sell > Catalog > Attributes & Features > Features" page
 */
class FeatureController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    use \PrestaShopBundle\Controller\BulkActionsTrait;
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Feature\FeatureFeature $featureFeature)
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\FeatureFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.feature')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $featureGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Create feature action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.feature_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $featureFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.feature_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $featureFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Edit feature action.
     *
     * @param int $featureId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function editAction(
        int $featureId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.feature_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $featureFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.feature_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $featureFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\FeatureFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function exportAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\FeatureFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.feature')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $featuresGridFactory
    ): \PrestaShopBundle\Component\CsvResponse
    {
    }
    /**
     * @param int $featureId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function deleteAction(int $featureId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function getAllFeatureGroupsAction(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
