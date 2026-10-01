<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

class FeatureValueController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    use \PrestaShopBundle\Controller\BulkActionsTrait;
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        int $featureId,
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: \PrestaShop\PrestaShop\Core\Grid\Factory\FeatureValueGridFactory::class)]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $featureValueGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.feature_value_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $featureValueFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.feature_value_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $featureValueFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $featureId
     * @param int $featureValueId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function editAction(
        int $featureId,
        int $featureValueId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.feature_value_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $featureValueFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.feature_value_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $featureValueFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function exportAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\FeatureValueFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: \PrestaShop\PrestaShop\Core\Grid\Factory\FeatureValueGridFactory::class)]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory
    ): \PrestaShopBundle\Component\CsvResponse
    {
    }
    /**
     * @param int $featureId
     * @param int $featureValueId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function deleteAction(int $featureId, int $featureValueId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $featureId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function bulkDeleteAction(int $featureId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Get all values for a given feature.
     *
     * @param int $featureId The feature Id
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse features list
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('read', 'AdminProducts')")]
    public function getFeatureValuesAction(int $featureId, \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\FeatureValuesChoiceProvider $featureValuesChoiceProvider): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Changes feature value position
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function updatePositionAction(
        int $featureId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.feature_value.position_definition')]
        \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
}
