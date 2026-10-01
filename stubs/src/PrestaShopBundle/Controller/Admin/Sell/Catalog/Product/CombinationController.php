<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog\Product;

class CombinationController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public static function getSubscribedServices(): array
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $combinationId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $combinationId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.combination_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $combinationFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.combination_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $combinationFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param string $languageCode
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchCombinationsForAssociationAction(\Symfony\Component\HttpFoundation\Request $request, string $languageCode, \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $productId
     * @param int|null $shopId
     * @param int|null $languageId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchProductCombinationsAction(\Symfony\Component\HttpFoundation\Request $request, int $productId, ?int $shopId, ?int $languageId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationForAssociation[] $combinationsForAssociation
     *
     * @return array<array<string, mixed>>
     */
    protected function formatCombinationProductsForAssociation(array $combinationsForAssociation): array
    {
    }
    /**
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function bulkEditFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $productId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.bulk_combination_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $bulkFormBuilder
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function bulkEditAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $productId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.bulk_combination_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $bulkFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.bulk_combination_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $bulkFormHandler
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Note: role must be hard coded because there is no route associated to this action therefore not
     * _legacy_controller request parameter.
     *
     * It can only be embedded into another view (does not have a route), it is included in this template:
     *
     * src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig
     *
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminProducts')")]
    public function paginatedListAction(
        int $productId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.combination_list_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $listFormBuilder
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $productId
     * @param int|null $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function getAttributeGroupsAction(int $productId, ?int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int|null $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function getAllAttributeGroupsAction(?int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $productId
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\ProductCombinationFilters $combinationFilters
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function getListAction(int $productId, \PrestaShop\PrestaShop\Core\Search\Filters\ProductCombinationFilters $combinationFilters): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $productId
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\ProductCombinationFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function getCombinationIdsAction(int $productId, \PrestaShop\PrestaShop\Core\Search\Filters\ProductCombinationFilters $filters): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $combinationId
     * @param int|null $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")]
    public function deleteAction(int $combinationId, ?int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $productId
     * @param int|null $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request, int $productId, ?int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $productId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))")]
    public function updateCombinationFromListingAction(
        int $productId,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.combination_list_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $listFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.combination_list_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $listFormHandler
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $productId
     * @param int|null $shopId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller'))")]
    public function generateCombinationsAction(int $productId, ?int $shopId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
