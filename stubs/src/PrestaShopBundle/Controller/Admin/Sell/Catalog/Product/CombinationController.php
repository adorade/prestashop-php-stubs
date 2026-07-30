<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog\Product;

class CombinationController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param int $combinationId
     *
     * @return Response
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, int $combinationId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param string $languageCode
     *
     * @return JsonResponse
     */
    public function searchCombinationsForAssociationAction(\Symfony\Component\HttpFoundation\Request $request, string $languageCode): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param int $productId
     * @param int|null $shopId
     * @param int|null $languageId
     *
     * @return JsonResponse
     */
    public function searchProductCombinationsAction(\Symfony\Component\HttpFoundation\Request $request, int $productId, ?int $shopId, ?int $languageId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param CombinationForAssociation[] $combinationsForAssociation
     *
     * @return array<array<string, mixed>>
     */
    protected function formatCombinationProductsForAssociation(array $combinationsForAssociation): array
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $productId
     *
     * @return Response
     */
    public function bulkEditFormAction(\Symfony\Component\HttpFoundation\Request $request, int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param int $productId
     *
     * @return JsonResponse
     */
    public function bulkEditAction(\Symfony\Component\HttpFoundation\Request $request, int $productId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', 'AdminProducts')")
     *
     * Note: role must be hard coded because there is no route associated to this action therefore not
     * _legacy_controller request parameter.
     *
     * It can only be embedded into another view (does not have a route), it is included in this template:
     *
     * src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig
     *
     * @param int $productId
     *
     * @return Response
     */
    public function paginatedListAction(int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int $productId
     * @param int|null $shopId
     *
     * @return JsonResponse
     */
    public function getAttributeGroupsAction(int $productId, ?int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int|null $shopId
     *
     * @return JsonResponse
     */
    public function getAllAttributeGroupsAction(?int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param int $productId
     * @param ProductCombinationFilters $combinationFilters
     *
     * @return JsonResponse
     */
    public function getListAction(int $productId, \PrestaShop\PrestaShop\Core\Search\Filters\ProductCombinationFilters $combinationFilters): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $productId
     * @param ProductCombinationFilters $filters
     *
     * @return JsonResponse
     */
    public function getCombinationIdsAction(int $productId, \PrestaShop\PrestaShop\Core\Search\Filters\ProductCombinationFilters $filters): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))")
     *
     * @param int $combinationId
     * @param int|null $shopId
     *
     * @return JsonResponse
     */
    public function deleteAction(int $combinationId, ?int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param int $productId
     * @param int|null $shopId
     *
     * @return JsonResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request, int $productId, ?int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $productId
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function updateCombinationFromListingAction(int $productId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller'))"
     * )
     *
     * @param int $productId
     * @param int|null $shopId
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function generateCombinationsAction(int $productId, ?int $shopId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
